<?php
require_once('../../../private/initialize.php');

$page = 'Team';
$page_title = 'All Members';
include(SHARED_PATH . '/admin_header.php');

?>

<div class="row">
	<div class="col-12">
		<a href="<?php echo url_for('public/team/exportData.php') ?>" class="btn btn-success my-2"> <i
				class="fa fa-file-excel-o"></i> Export CSV</a>
		<div class="card">
			<div class="card-body">

				<table id="basic-datatable" class="table dt-responsive nowrap w-100">
					<thead>
						<tr>
							<th>s/n</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Board</th>
							<!-- <th>Rc. No.</th> -->
							<!-- <th>Member Since </th> -->
							<th>Action</th>
						</tr>
					</thead>


					<tbody>
						<?php $sn = 1;
						foreach (Team::find_by_undeleted() as $key => $value) { ?>
							<tr>
								<td>
									<?php echo $sn++ ?>.
								</td>
								
								<td>
									<?php echo $value->fullname ?>
								</td>
								<td>
									<?php echo $value->email ?>
								</td>
								<td>
									<?php echo $value->phone ?>
								</td>
								<td>
									<?php echo TeamCategory::find_by_id($value->category)->name ?>
								</td>

								<td>
                                    <button data-id="<?php echo $value->id ?>" class="btn btn-outline-info btn-sm update">Update</button>
                                    <a href="<?php echo url_for('public/team/delete.php?id='. $value->id) ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                                </td>
								
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <a href="index" class="text-success">
                            <span><img src="<?php echo url_for('assets/images/logo-dark.png') ?>" alt="" height="18"></span>
                        </a>
                    </div>
                    <div class="error d-none"></div>

                    <form class="ps-3 pe-3 row" id="form">
                      
                        <div class="mb-3 col-lg-6 col-md-6">
                            <label for="firstname" class="form-label">fullname</label>
                            <input class="form-control" name="first_name"  type="text" id="firstname" required="" placeholder="Michael">
                        </div>

                        <div class="mb-3 col-12">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                        </div>

                        <div class="mb-3 col-lg-6 col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input class="form-control" name="phone" type="phone" required="" id="phone" placeholder="Enter your phone">
                        </div>
      
                        

                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Create Memeber</button>
                        </div>

                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="updateModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <a href="index" class="text-success">
                            <span><img src="<?php echo url_for('assets/images/logo-dark.png') ?>" alt="" height="18"></span>
                            <h3 class="text-center">Edit Team</h3>
                        </a>
                    </div>

                    <form id="updateform" class="ps-3 pe-3" action="#">
                        
                        <div id="showData"></div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>

                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



<?php include(SHARED_PATH . '/admin_footer.php'); ?>

<script type="text/javascript">




    $(document).on("click", ".update", function(e) {
        $("#updateModal").modal('show');
        var user_id = $(this).data('id');
        $.ajax({
            url: 'components/edit_form.php',
            method:"POST",
            data: {
                update: 1,
                id: user_id,
            },
            success: function (data) {
                $("#showData")(data)
            }
        })
    })
    $(document).on("submit", "#updateform", function(e) {
        e.preventDefault();
        $.ajax({
            url: 'components/process_update.php',
            method:"POST",
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                if (data.success == true) {
                    successAlert(data.msg);
                    $("#updateModal").modal('hide');
                }else{
                    errorAlert(data.msg);
                }
            }
        })
    })

    $(document).on("submit", "#form", function(e) {
        e.preventDefault();
        $.ajax({
            url: 'components/createUser.php',
            method:"POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function (data) {
                if (data.success == true) {
                     successTime(data.msg);
                     window.location.reload()
                     // $(".signup-modal").modal('hide');
                     // CreateUserMail(data.email, data.firstname, data.lastname, data.password)
                }else{
                    // errorAlert(data.msg);
                    $(".error").removeClass('d-none');
                    $(".error")(data.msg);
                }
            }
        })
    })


     $(document).on("click", ".process_pay", function(e) {
        $('#payModal').modal('show');
        var agt_id = $(this).data('id');;
        $.ajax({
            url: 'components/payment_form.php',
            method:"POST",
            data: {
                update: 1,
                id: agt_id,
            },
            success: function (data) {
                $("#showPayData")(data)
            }
        })
    })

     $(document).on("submit", "#payform", function(e) {
        e.preventDefault();

        $.ajax({
            url: 'components/process_payment.php',
            method:"POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function (data) {
                if (data.success == true) {
                     successTime(data.msg);
                     window.location.reload()
                     // $(".signup-modal").modal('hide');
                     // CreateUserMail(data.email, data.firstname, data.lastname, data.password)
                }else{
                    // errorAlert(data.msg);
                    $(".error").removeClass('d-none');
                    $(".error")(data.msg);
                }
            }
        })
    })
    
</script>
<!-- Datatables js -->
<script src="<?php echo url_for('assets/js/vendor/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.bootstrap5.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/responsive.bootstrap5.min.js') ?>"></script>

<!-- Datatable Init js -->
<script src="<?php echo url_for('assets/js/pages/demo.datatable-init.js') ?>"></script>
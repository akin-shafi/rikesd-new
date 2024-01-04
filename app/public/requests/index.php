<?php require_once('../../../private/initialize.php');

$page = 'Request';
$page_title = 'All';
include(SHARED_PATH . '/admin_header.php'); 
$status = $_GET['status'] ?? 1;
?>
<!-- Datatables css -->
<link href="<?php echo url_for('assets/css/vendor/dataTables.bootstrap5.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo url_for('assets/css/vendor/responsive.bootstrap5.css') ?>" rel="stylesheet" type="text/css" />
<style type="text/css">
	.form-check:hover{
		background-color: #f1f1f1;
	}
</style>

	
	<div class="row">
		<div class="col-12">
			
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table  id="basic-datatable" class="table dt-responsive nowrap w-100">
							<thead>
								<tr>
									<th>ID</th>
									<th>Need</th>
									<th>Email</th>
									<th>OTP</th>
									<th>Profession</th>
									<th>Specialization</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Phone</th>
									<th>Country</th>
									<th>State</th>
									<th>Address</th>
									<th>Created At</th>
								</tr>
							</thead>
							<?php $sn =1; foreach (NewProject::find_by_undeleted() as $entry): 
							$expertise = Professions::find_by_id($entry->profession);
							$spec = Specializations::find_by_id($entry->specialization);
							?>
							<tbody>
								<tr>
									<td><?= $sn++; ?></td>
									<td><?= $entry->need; ?></td>
									<td><?= $entry->email; ?></td>
									<td><?= $entry->otp; ?></td>
									<td><?= $expertise->profession ?? ''; ?></td>
									<td><?= $spec->sub_profession; ?></td>
									<td><?= $entry->firstname; ?></td>
									<td><?= $entry->lastname; ?></td>
									<td><?= $entry->phone; ?></td>
									<td><?= $entry->country; ?></td>
									<td><?= $entry->state; ?></td>
									<td><?= $entry->address; ?></td>
									<td><?= $entry->created_at; ?></td>
								</tr>
							<tbody>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Right modal -->

<div id="assignTaskModal" class="modal  fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-right">
    <!-- <div class="modal-dialog  "> -->
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h4 class="mt-0">Administrator</h4>
                    <form id="form" class="mt-3">
                    	<?php foreach (Admin::find_by_undeleted() as $key => $value) { ?>
                    		<?php if ($value->process_request == 1) { ?> 
                    		<?php //if ($support == 1) { ?>
						    <div class="form-check border-bottom">
						        <input type="radio" id="customRadio<?php echo $key ?>" style="width: 25px; height:25px" name="admin_id" class="form-check-input" value="<?php echo $value->id ?>">
						        <label class="form-check-label p-2" for="customRadio<?php echo $key ?>"><?php echo Admin::find_by_id($value->id)->full_name(); ?></label>
						    </div>
						    <?php } ?>
					    <?php } ?>
					    
					</form> 
                    
                </div>
                <div class="display_error"></div>
                <div class="text-center my-3">
                	<button type="button" id="genTask" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="createTaskModal" class="modal  fade show" tabindex="-1" role="dialog" aria-hidden="true" style="display: ;">
    <div class="modal-dialog modal-lg ">
    <!-- <div class="modal-dialog  "> -->
        <div class="modal-content">
        	<div class="modal-header">
		        <h5 class="modal-title" id="exampleModalCenterTitle">Create New Task</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>

            <!-- <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body">
                <div class="">
                    <!-- <h4 class="mt-0">Create New Task</h4> -->
                    <form id="createForm">
			            <div class="row">
			                

			                <div class="col-md-12 my-2  wrap">
			                    <label for="trans_type">Document Type </label>
			                    <input type="text" id="trans_type" class="form-control border-secondary" required name="trans_type">
			                    
			                </div>
			                <div class="col-md-6 my-2">
			                    <label for="email">Email </label>
			                    <input type="text" required id="email" name="email" class="form-control border-secondary">
			                </div>

			                <div class="col-md-6 my-2">
			                    <label for="firstname">Firstname </label>
			                    <input type="text" required id="firstname" name="firstname" class="form-control border-secondary">
			                </div>
			                <div class="col-md-6 my-2">
			                    <label for="lastname">Lastname </label>
			                    <input type="text" required id="lastname" name="lastname" class="form-control border-secondary">
			                </div>
			                
			                <div class="col-md-6 my-2">
			                    <label for="phone">Phone Number </label>
			                    <input type="text"  id="phone" name="phone" class="form-control border-secondary">
			                </div>

			                <div class="col-md-12">
			                    <label>Method of delivery ?</label>
			                    <select class="form-control y-3 border-secondary" name="delivery_option" id="delivery_option" required="">
			                        <option value="">Select Delivery Option</option>
			                        <option value="softcopy">Electronic Document only(Via Email)</option>
			                        <option value="both">Electronic and Physical document(To your address)</option>
			                        <option value="collection">Collection</option>
			                    </select>
			                </div>
			                <div class="col-md-12 mt-3 d-none delivery_address">
			                    <label>Delivery Address (This is where notarised documents will be dispatched to) </label>
			                    <input type="text" name="delivery_address" id="delivery_address" class="form-control border-secondary my-3">
			                </div>
			            </div>
			            

			            <div class="col-12 my-2 p-0">
			                <button type="submit" id="Submit" class="btn btn-primary w-100 py-1">Submit</button>
			            </div>
			        </form>
                    
                </div>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php include(SHARED_PATH . '/admin_footer.php');?>
<!-- Datatables js -->

<script type="text/javascript">
	$(document).on('change', '#delivery_option', function () {
        var selected = $(this).find(":selected").val();
        console.log(selected);
        if (selected == 'both') {
            $(".delivery_address").removeClass("d-none");
            $("#delivery_address").prop('required',true);
        }else{
            $(".delivery_address").addClass("d-none");
            $("#delivery_address").prop('required',false)
        }
    } )

	$('.checkbox').mousedown(function() {
		var numberOfChecked = $('input:checkbox:checked').length;
	    if (!$(this).is(':checked')) {
	        $(this).closest("tr").addClass('rowBg');
	    }else{
	    	$(this).closest("tr").removeClass('rowBg');	
	    }
	});
	// $(document).on("click", "#assignTask", function(e) {
	// 	$("#assignTaskModal").modal("show")
	// }); 

	$(document).on("click", "#genTask", function(e) {

		var checkbox = $('.checkbox:checked');
		var checkbox_value = [];
		var admin_id = $(".form-check-input:checked").val()
		if (checkbox.length > 0) {
			$(checkbox).each(function() {
				checkbox_value.push($(this).val());
			})
			// var 
			if (admin_id == "") {
				errorAlert("select at least one admin")
			}else{
				$.ajax({
		            url: 'components/assign_task.php',
		            method:"POST",
		            data: {
		                assignTask: 1,
		                admin_id: admin_id,
		                status: 2,
		                request: checkbox_value,
		            },
		            dataType: "json",
		            success: function (data) {
		                if (data.success == true) {
		                	 successTime(data.msg);
		                	 $('input:checkbox:checked').closest('tr').css('display', 'none')
		                	 TaskAssignedMail(data.email)
		                }else{
		                    errorAlert(data.msg);
		                     $(".display_error")(data.msg);
		                }
		            }
		        })
			}
			

		}else{
			$("#assignTaskModal").modal("hide");
			errorAlert("select at least one record")
		}
	});

	function TaskAssignedMail(email){
        $.ajax({
            url: '../../processor/TaskAssignedMail.php',
            method:"POST",
            data: {
                TaskAssignedMail: 1,
                email: email,
            },
            dataType: "json",
            success: function (data) {
                if (data.success == true) {
                	 // successTime(data.msg);
                	 location.reload();
                }else{
                    errorAlert("Success email not sent")
                }
            }
        })
    }







    $(document).on("submit", "#createForm", function(e){
        e.preventDefault();
        
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var trans_type = $('#trans_type').val()
        // var req_form = 1;
        $.ajax({
            url: '../../../inc/process_form.php',
            method:"POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function (r) {
                if (r.success == true) {
                    $("#createTaskModal").modal('hide');
                    // confirmAlert('Awesome', 'Your request is received. A member of our team will reach out to you shortly');
                    $("#createForm").trigger("reset");
                    var req_no = r.req_no;
                    successAlert(r.msg)
                    location.reload();
                    // RequestSuccessMail(firstname, lastname, email, phone, trans_type, req_no)
                }else{
                    errorAlert(r.msg)
                } 
            }
        })
    })

</script>
<script src="<?php echo url_for('assets/js/vendor/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.bootstrap5.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/responsive.bootstrap5.min.js') ?>"></script>
<!-- Datatable Init js -->
<script src="<?php echo url_for('assets/js/pages/demo.datatable-init.js') ?>"></script>
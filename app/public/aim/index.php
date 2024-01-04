<?php
require_once('../../../private/initialize.php');

$page = 'AIM';
$page_title = 'AIM Applications';
include(SHARED_PATH . '/admin_header.php');
$app_id = $_GET['app_id'] ?? 1;
?>

<div class="row" id="analytic">
    <a href="<?php echo url_for('public/aim/index.php?app_id=1') ?>" class="col-lg-6 col-xl-3">
        <div class="card <?= ($app_id == 1) ? 'active': ''?>">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Academia Applications">Academia Applications</h5>
                        <h3 class="my-2 py-1"><?php echo count(AimAcademicApplicants::find_all()); ?></h3>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <div id="campaign-sent-chart" data-colors="#3688fc"></div>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </a> <!-- end col -->

    <a href="<?php echo url_for('public/aim/index.php?app_id=2') ?>" class="col-lg-6 col-xl-3">
        <div class="card <?= ($app_id == 2) ? 'active': ''?>">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Industrial Applications">Industrial Applications</h5>
                        <h3 class="my-2 py-1"><?php echo count(AimIndustryApplicants::find_all()); ?></h3>
                        
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <div id="booked-revenue-chart" data-colors="#42d29d"></div>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </a> <!-- end col -->
</div>


<?php ($app_id == 1) ? include('academia.php') : include('industry.php') ?>   



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
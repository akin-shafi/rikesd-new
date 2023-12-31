<?php require_once('../../../private/initialize.php');
$page_title = 'Student Theses';
?>

<?php include(SHARED_PATH . '/marketplace-header.php'); ?>

<!-- <section> begin ============================-->
<section class="section bg-light container-fluid border">
    <div class=" container">
        <div class="row">
            <div class="col-12">
                <h4 class="my-2">3D Printer</h4>
                <p class="mb-2">
                    <a rel="Person" href="#!" class="link text-info person">Department of Chemical Engineering</a>
                </p>

                <!-- <p class="mb-2">Department of Electronic & Electrical Engineering</p> -->
                <i>Facility/equipment: Equipment</i>

                <hr>

                <div class="mb-2 person">location:
                    University of Lagos
                    Akoka Lagos
                    <br>
                    Nigeria
                </div>

                <div>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                        data-bs-target="#declarationModal">
                        Lease/Rent Now at $
                        <?php echo number_format(500, 2) ?>
                    </button>
                </div>


            </div>
        </div>
    </div>
</section>


<!-- Declaration of Interest Modal -->
<div class="modal fade" id="declarationModal" tabindex="-1" aria-labelledby="declarationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="declarationModalLabel">Declaration of Interest</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your declaration of interest form goes here -->
                <form>
                    <!-- Example form fields -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address:</label>
                        <input type="email" class="form-control" id="email" placeholder="john@example.com">
                    </div>
                    <!-- Add more form fields as needed -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Additional Message (if any):</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <!-- Add your form submission logic here -->

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<style>
    .bg-custom {
        background: #f2f2f2;
        border-top: 1px solid #e1e4e6;
        border-bottom: 1px solid #e1e4e6;
    }

    .is-tab.active {
        border-bottom: 2px solid #666 !important;
        border-radius: 0 !important;
        color: #666 !important;
    }
</style>
<div class="py-3 bg-custom">
    <div class="container">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <div class="nav-link btn me-2 is-tab active" id="pills-overview-tab" data-bs-toggle="pill" data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview" aria-selected="true">
                    <i class="fas fa-cube me-2"></i> Overview
                </div>
            </li>
            <!-- <li class="nav-item" role="presentation">
                <div class="nav-link btn me-2 is-tab" id="pills-fingerprint-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-fingerprint" type="button" role="tab" aria-controls="pills-fingerprint"
                    aria-selected="false">
                    <i class="fas fa-fingerprint"></i> Fingerprint
                </div>
            </li> -->
        </ul>
    </div>
</div>

<div class="container mt-3 mb-5">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
            <div class="row pt-3">
                <div class="col-12 col-md-9 ">
                    <div class="tab-pane fade show active" id="pills-over">

                    </div>
                    <div>

                        <table class="table table-borderless">
                            <tr>
                                <td>Name</td>
                                <td>Make: 3D SYSTEMS; Model: PROJECT 3500 HDMAX</td>
                            </tr>
                            <tr>
                                <td>Acquisition date</td>
                                <td>30/06/15</td>
                            </tr>

                            <tr>
                                <td>Decommission date</td>
                                <td>1/01/23</td>
                            </tr>

                        </table>

                        <h4>Equipment taxonomy</h4>
                        <div class="btn btn-outline-secondary">Evaporator</div>

                        <hr>
                        <div>
                            <h4>
                                Images
                            </h4>
                            <img src="<?php echo url_for_root('/assets/upload/equipment-facilities/3d-printer.jpeg') ?>" alt="" srcset="" class="img-fluid">
                        </div>

                    </div>


                </div>
                <div class="col-12 col-md-3 ">
                    <h5>Contact information</h5>
                    <div>
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td>Davide Mattia</td>
                            </tr>
                            <tr>
                                <td>Emails:</td>
                                <td>dm294@bath.ac.uk</td>
                            </tr>
                        </table>

                    </div>


                </div>
            </div>
        </div>

    </div>
</div>


<!-- <section> close ============================-->

</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->
<input type="hidden" id="eUrl" value="<?= url_for_root('/login') ?>">
<?php include(SHARED_PATH . '/main-footer.php'); ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script> -->
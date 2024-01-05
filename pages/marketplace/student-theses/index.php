<?php require_once('../../../private/initialize.php');
$page_title = "Student Theses";
$page = "Market Place";


?>
<?php include(SHARED_PATH . '/marketplace-header.php'); ?>
<?php include('../search.php') ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <h6>Filters for
                    <?= $page_title ?? "" ?>
                </h6>
                <div class="border-bottom mb-3">
                    <p class="mb-1">Type</p>
                    <div class="content" id="content1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="1">
                            <label class="form-check-label" for="1">
                                PhD (1)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="2">
                            <label class="form-check-label" for="2">
                                Doctor of Education (EdD) (1)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="2">
                            <label class="form-check-label" for="2">
                                Doctor of Clinical Psychology (DClinPsy) (1)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="2">
                            <label class="form-check-label" for="2">
                                MPhil (1)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="2">
                            <label class="form-check-label" for="2">
                                Doctor of Business (DBA) (1)
                            </label>
                        </div>
                    </div>

                    <!-- <label role="button" class="toggleButton d-inline-block my-2" data-target="content1">
            Show more
        </label> -->
                </div>
            </div>
            <div class="col-12 col-md-9">


                <div class="result-container mb-5">
                    <div class="card">
                        <h5 class="card-title">
                            <a rel="UPMProject"
                                href="<?php echo url_for_root('pages/marketplace/student-theses/theses-detail.php?dt=The_future_of_critical_public_health'); ?>"
                                class="link">
                                3D Face Recognition Using Multicomponent Feature Extraction from the Nasal Region and
                                its Environs
                            </a>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <a rel="Person" href="#!" class="link person">Jiangning Gao</a>
                        </h6>


                        <small class="card-text mb-0">
                            <span class="date">3/01/24</span> → <span class="date">31/07/24</span>
                        </small>

                        <p class="card-text">
                            <small class="d-block mb-2">
                                <i>
                                    <span class="type_family">Student thesis<span class="type_family_sep">: </span>
                                    </span><span class="type_classification"> Doctoral Thesis › PhD</span>
                                </i>
                            </small>
                        </p>


                    </div>

                </div>




                <nav aria-label="Result navigation">
                    <ul class="pagination pagination-sm justify-content-center">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php include(SHARED_PATH . '/main-footer.php'); ?>
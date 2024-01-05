<?php require_once('../../private/initialize.php');
$page_title = 'List';
$page = 'Training';

include(SHARED_PATH . '/horizontal_header.php'); ?>

<div class="row d-flex justify-content-center">
    <div class="col-lg-6 col-12">
        <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
            <li class="nav-item">
                <a href="#accelerator-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                    <i class="mdi mdi-accelerator-variant d-md-none d-block"></i>
                    <span class="d-none d-md-block">Accelerator (7 Modules)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#incubator-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link ">
                    <i class="mdi mdi-account-circle d-md-none d-block"></i>
                    <span class="d-none d-md-block">incubator (7 Modules)</span>
                </a>
            </li>

        </ul>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane show active" id="accelerator-b2">
        <?php include('accelerator.php') ?>
    </div>
    <div class="tab-pane " id="incubator-b2">
        <?php include('incubator.php') ?>
    </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
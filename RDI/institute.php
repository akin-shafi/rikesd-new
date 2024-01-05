<?php require_once('../private/initialize.php');

$tab = $_GET['tab'] ?? '';
$data = Services::find_by_id($tab) ?? '';
$page_title = $data->item;
?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php include(SHARED_PATH . '/page-banner.php'); ?>

<style>
    .active {
        background-color: #fdd428 !important;
        /* border: 1px solid green  !important; */
        color: #000 !important;
    }

    .fab-nav .nav-link {
        text-transform: uppercase;
    }
</style>

<section class="section bg-100 container-fluid" style="padding-top: 7.5rem !important;padding-bottom: 7.5rem !important;">
    <div class="row">
        <div class="col-md-9 col-lg-9 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <h4 class="text-uppercase fs-0 fs-md-1 text-center"><?= $data->item ?> </h4>
            <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>

                <div class="card-body p-md-5" id="formbody">

                    <div id="content">
                        <div class="container">
                            <div class="row justify-content-center ">
                                <div class="col text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                    <h1 class="fs-2 fs-sm-4 fs-md-6 " data-zanim-xs='{"delay":0.3}'>Coming Soon</h1>
                                    <div data-zanim-xs='{"delay":0.4}'>
                                        <a class="btn btn-lg btn-warning rounded-pill mt-4" href="<?= url_for_root('/') ?>">Take Me Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of .container -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>






</main><!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

<input type="hidden" id="input" value="<?php echo url_for_root('/services/aim.php') ?>">

<?php include(SHARED_PATH . '/main-footer.php'); ?>
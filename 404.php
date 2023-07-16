<?php require_once('private/initialize.php'); 
$page_title = "404";
?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php //include(SHARED_PATH . '/page-banner.php'); ?>

    

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="section text-center py-0">
        <div class="bg-holder overlay overlay-elixir" style="background-image:url(../assets/img/background-14.jpg);"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row min-vh-100 align-items-center text-white">
            <div class="col" data-zanim-timeline="{}" data-zanim-trigger="scroll"><a href="<?= url_for_root('/') ?>" data-zanim-xs='{"delay":0}'><img src="../assets/img/logo-dark.png" width="250" alt="logo" data-zanim-xs='{"delay":0.1}' /></a>
              <h5 class="text-uppercase mt-5 ls text-white fs-0 fs-md-1" data-zanim-xs='{"delay":0.2}'>oops! page not found</h5>
              <h1 class="fs-4 fs-sm-6 fs-md-8 text-white" data-zanim-xs='{"delay":0.3}'>404</h1>
              <div data-zanim-xs='{"delay":0.4}'><a class="btn btn-lg btn-warning rounded-pill mt-4" href="<?= url_for_root('/') ?>">Take Me Home</a></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php include(SHARED_PATH . '/main-footer.php'); ?>
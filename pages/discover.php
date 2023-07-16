<?php require_once('../private/initialize.php'); 
$page_title = "Discover";

?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php //include(SHARED_PATH . '/page-banner.php'); ?>
<style>
  .active{
    background-color: #fdd428  !important;
    /* border: 1px solid green  !important; */
    color: #000  !important;
  }
  .fab-nav .nav-link{
    text-transform: uppercase;
  }
</style>


  <section class="section bg-100 container-fluid">
    <div class="row">
        <div class="col-md-9 col-lg-12 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <h4 class="text-uppercase fs-0 fs-md-1 text-center"><?php echo $page_title ?></h4>
          <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
            
            <div class="card-body p-md-5" id="formbody">
              
            <div class="container mt-5">
                <div class="row">
                <?php foreach (Discovery::find_by_undeleted() as $discovery): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img height="180" src="<?php echo url_for_root('assets/img/discovery/'.  $discovery->image_url )?>" class="card-img-top" alt="<?php echo $discovery->discovery_name; ?>">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $discovery->discovery_name; ?></h5>
                        <p class="card-text">Theme: <?php echo $discovery->theme; ?></p>
                        <p class="card-text">Date: <?php echo date('F jS, Y', strtotime($discovery->date)); ?></p>
                        <p class="card-text">Topic: <?php echo $discovery->topic; ?></p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                    
                </div>
                </div>

          </div>
        </div>
    </div>
  </section>
                  

  


    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <input type="hidden" id="input" value="<?php echo url_for_root('/services/aim.php')?>">

    <?php include(SHARED_PATH . '/main-footer.php'); ?>

    <script>
        const url = $('#input').val();
        function changeTab(url, tabId, application_type) {
            // Reload the page with the selected tab ID as a URL parameter
            window.location.href = url + `?tab=${tabId}`+ `&application_type=${application_type}`;
        }
    </script>
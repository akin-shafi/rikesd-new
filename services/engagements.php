<?php require_once('../private/initialize.php'); 
// $application_type = $_GET['application_type'] ?? 0;
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;

$services = Services::find_by_id($activeTab) ?? '';
$page_title = $services->item;



$applicationList = ['AIM for Academia', 'AIM for Industries'];
?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php include(SHARED_PATH . '/page-banner.php'); ?>
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


  <section class="section pt-4 bg-100 container-fluid">
    <div class="row">
        <div class="col-md-9 col-lg-12 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <h4 class="text-uppercase fs-0 fs-md-1 text-center">Previous Engagement</h4>
          <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
            
            <div class="card-body p-md-5" id="formbody">
              
            <div id="content">
                <div class=" mt-5">
                    <div class="row">
                        <?php foreach (Programs::find_by_undeleted() as $key => $value) { ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="<?php echo url_for_root('assets/img/program/'.  $value->image_url )?>" height="400" class="card-img-top" alt="Program 1">
                                <div class="card-body">
                                <h5 class="card-title"><?php echo $value->name ?></h5>
                                <p class="card-text">Theme: <?php echo $value->theme ?></p>
                                <p class="card-text">Date: <?php echo date('F jS, Y', strtotime($value->date)) ?></p>
                                <p class="card-text">Topic: <?php echo $value->topic ?></p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                    </div>

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
<?php require_once('../private/initialize.php'); 
$page_title = "Services";
$application_type = $_GET['application_type'] ?? 0;
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;

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


<section class="section bg-100 container-fluid">
        <div class="row">
            <div class="col-md-9 col-lg-9 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h4 class="text-uppercase fs-0 fs-md-1 text-center">Apply Now</h4>
              <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
                
                <div class="card-body p-md-5" id="formbody">

                  <div class=" p-0 d-flex justify-content-center">
                    <ul class="fab-nav nav nav-tabs mb-2" id="myTab" role="tablist">
                    <!-- <ul class="nav nav-pills mb-3" id="myTab" role="tablist"> -->
                        <?php foreach ($applicationList as $index => $value): 
                        ?>
                            <li class="nav-item " >
                                <a class="nav-link <?php echo $index == $application_type  ? 'active' : '' ?>" onclick="changeTab('', <?php echo $activeTab ?>, <?php echo $index ?>)"><?php echo $value ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                

                  <div id="content">
                    <?php 
                      if(!isset($application_type) || $application_type == 0){
                        include('form_field_academia.php');
                      }else{
                        include('form_field_industry.php');

                      } 
                    ?>
                    <!-- end of .container -->
                  </div>
                </div>
              </div>
            </div>
        </div>
</section>
                  

<!-- <section class="section py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-10 col-md-6">
        <h3 class="fs-2 fs-lg-3 my-3">Apply Now</h3>
      </div>
    </div> -->

    

  


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
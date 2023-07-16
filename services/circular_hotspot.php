<?php require_once('../private/initialize.php'); 
// $application_type = $_GET['application_type'] ?? 0;
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
$services = Services::find_by_id($activeTab) ?? 1;
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
        <div class="col-md-9 col-lg-9 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <h4 class="text-uppercase fs-0 fs-md-1 text-center">Enroll Today</h4>
          <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
            
            <div class="card-body p-md-5" id="formbody">
              
            <div id="content">
                <div class="container">
                <h5 class="mb-4">Enrollment Form for Circular Hotspot Program:</h5>
                <p class="lead d-none">Explore the World of Circular Hotspots</p>
                <p class="d-none">Uncover the fascinating realm of circular hotspots and their applications. Join our immersive program to delve into the principles, techniques, and cutting-edge advancements in circular hotspot technology. Whether you're a novice or an expert, our program offers engaging workshops and hands-on experiences to expand your knowledge. Enroll today and embark on a journey of discovery!</p>
                <form action="#" class="row" method="POST">
                <div class="form-group mb-3 col-lg-6">
                    <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="form-group mb-3 col-lg-6">
                    <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                <div class="form-group mb-3 col-lg-6">
                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mb-3 col-lg-6">
                    <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                    <input type="phone" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group mb-3 col-lg-12">
                    <label for="experience" class="form-label">Years of Experience <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="experience" name="experience" required>
                </div>
                <div class="form-group mb-3 col-lg-12">
                    <label for="skills" class="form-label">Current Skills <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="skills" name="skills" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3 col-lg-12">
                    <label for="interests" class="form-label">Areas of Interest <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="interests" name="interests" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3 col-lg-12">
                    <label for="expectations" class="form-label">What are your expectations from the Program? <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="expectations" name="expectations" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3 col-lg-12">
                    <label for="availability" class="form-label">Availability for the Program <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="availability" name="availability" required>
                </div>
                <button type="submit" class="btn btn-primary">Enroll Today</button>
                </form>
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

    <input type="hidden" id="input" value="<?php echo url_for_root('/services/aim.php')?>">

    <?php include(SHARED_PATH . '/main-footer.php'); ?>

    <script>
        const url = $('#input').val();
        function changeTab(url, tabId, application_type) {
            // Reload the page with the selected tab ID as a URL parameter
            window.location.href = url + `?tab=${tabId}`+ `&application_type=${application_type}`;
        }
    </script>
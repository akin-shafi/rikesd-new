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
          <h4 class="text-uppercase fs-0 fs-md-1 text-center">Research commercialisation Submission Form</h4>
          <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
            
            <div class="card-body p-md-5" id="formbody">
              
              <div id="content">
                <div class="container">
                <h5 class="mb-4">Submit Your Research for commercialisation</h5>
                <!-- <p class="lead">Submit Your Research for commercialisation</p> -->
                <p>If you have a completed research project that you're interested in commercialising or if you're seeking potential customers, uptakers and funders for your research work, please fill out the form below. We'll review your submission and get in touch with you to discuss potential opportunities.</p>
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
                    <label for="projectTitle" class="form-label">Research Project Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="projectTitle" name="projectTitle" required>
                </div>
                <div class="form-group mb-3 col-lg-12">
                    <label for="projectDescription" class="form-label">Research Project Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="projectDescription" name="projectDescription" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3 col-lg-12">
                    <label for="targetMarket" class="form-label">Target Market <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="targetMarket" name="targetMarket" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3 col-lg-12">
                    <label for="valueProposition" class="form-label">Value Proposition <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="valueProposition" name="valueProposition" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3 col-lg-12">
                    <label for="contactMethod" class="form-label">Preferred Contact Method <span class="text-danger">*</span></label>
                    <select class="form-control" id="contactMethod" name="contactMethod" required>
                        <option value="">Select Contact Method</option>
                        <option value="phone">Phone</option>
                        <option value="email">Email</option>
                        <option value="both">Both Phone and Email</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit Research</button>
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
   
    <?php include(SHARED_PATH . '/main-footer.php'); ?>

    
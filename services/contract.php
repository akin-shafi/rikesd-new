<?php require_once('../private/initialize.php'); 
$page_title = 'Contract Research';
// $application_type = $_GET['application_type'] ?? 0;
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
$services = Services::find_by_id($activeTab) ?? 1;
$page_title = $services->item;


?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php include(SHARED_PATH . '/page-banner.php'); ?>



  <section class="section pt-4 bg-100 container-fluid">
    <div class="row">
        <div class="col-md-9 col-lg-9 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <h4 class="text-uppercase fs-0 fs-md-1 text-center">Contact Us Today</h4>
          <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
            
            <div class="card-body p-md-5" id="formbody">
              
            <div id="content">
                <div class="container">
                <h5 class="text-center mb-4"> Research as a Service Contract Form</h5>
                <form>
                    <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                    <div class="mb-3">
                    <label for="researchTopic" class="form-label">Research Topic</label>
                    <input type="text" class="form-control" id="researchTopic" name="researchTopic" required>
                    </div>
                    <div class="mb-3">
                    <label for="researchDescription" class="form-label">Research Description</label>
                    <textarea class="form-control" id="researchDescription" name="researchDescription" rows="4" required></textarea>
                    </div>
                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="agreeTerms" name="agreeTerms" required>
                    <label class="form-check-label" for="agreeTerms">I agree to the <a href="<?= url_for_root('services/contract_term') ?>">terms and conditions</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
                <!-- end of .container -->
              </div>

            </div>
          </div>
        </div>
    </div>
  </section>
                  

    <?php include(SHARED_PATH . '/main-footer.php'); ?>


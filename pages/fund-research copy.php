<?php require_once('../private/initialize.php'); 
$page_title = "Research Funding";

?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php include(SHARED_PATH . '/page-banner.php'); ?>
<style>
 
</style>

    <section class="section pt-4 bg-100 container-fluid">
        <div class="row">
            <div class="col-md-9 col-lg-9 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <h4 class="text-uppercase fs-0 fs-md-1 text-center"> RESEARCHERS-FUNDER MEETING POINT</h4>
            <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
                
                <div class="card-body p-md-5" id="formbody">
                
                    <div id="content">
                        <div class="container">
                        <h5 class="mb-4"> INVESTMENT FORM</h5>
                            
                            <form action="#" class="row" method="POST">
                                <div class="mb-3">
                                    <label for="funderName" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="funderName" name="funderName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="organization" class="form-label">Organization</label>
                                    <input type="text" class="form-control" id="organization" name="organization" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                
                                <div class="mb-3 col-lg-6">
                                    <label for="currency" class="form-label">Currency </label>
                                <select class="form-control"  id="currency" name="currency" required>
                                    <option value="">Select Currency Type</option>
                                    <option value="">Dollar</option>
                                    <option value="">Euro</option>
                                    <option value="">Pounce</option>
                                    <option value="">Naira</option>
                                </select>
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label for="investmentAmount" class="form-label">Investment Amount</label>
                                    <input type="number" class="form-control" id="investmentAmount" name="investmentAmount" required>
                                </div>
                                <div class="mb-3">
                                    <label for="researchInterest" class="form-label">Research Interests</label>
                                    <textarea class="form-control" id="researchInterest" name="researchInterest" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Invest in Research</button>
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

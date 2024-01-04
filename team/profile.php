<?php require_once('../private/initialize.php'); 
$page_title = 'Personal Profile';
$id = $_GET['id'] ?? 1;
$profile = Team::find_by_id($id); 
?>
<?php include(SHARED_PATH . '/main-header.php'); ?>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="section bg-100">
        <!-- Main Content -->
        <h4 class="text-uppercase fs-0 fs-md-1 text-center"><?php echo $page_title ?? '' ?></h4>
        <div class="container mt-4">
            <div class="row">
                <!-- Profile Information -->
                <div class="col-md-4">
                    <div class="card p-2">
                        <!-- Profile Picture -->
                        <img class="card-img-top img-fluid sub-img"  height="90"  src="<?php echo url_for_root('assets/img/leaders/'). $profile->photo; ?>" alt="<?php echo $profile->fullname ?>" />
                        
                        <!-- Profile Name -->
                        <h5 class="mt-3 text-center"><?php echo $profile->fullname ?></h5>
                        <!-- Profile Headline/Tagline -->
                        <h6 class="text-muted text-center"><?php echo $profile->personality ?></h6>
                    </div>
                    
                    
                </div>

                <!-- Profile Content -->
                <div class="col-md-8">
                    
                    <div class="card mb-4">
                        <div class="card-header">Brief Biography</div>
                        <div class="card-body">
                            <p>
                                <?php echo $profile->brief_biography ?? '' ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a target="_blank" href="<?php echo $profile->linkedIn ?>"><span class="fab fa-linkedin fs-2 me-2 text-primary"></span></a>
                        </div>
                    </div>

                    <!-- Add your profile content here, such as work experience, education, skills, etc. -->
                    <div class="card mb-4 d-none">
                        <div class="card-header">Work Experience</div>
                        <div class="card-body">
                            <h5 class="card-title">Job Title</h5>
                            <p class="card-text">Company Name, Location</p>
                            <p class="card-text">Start Date - End Date</p>
                        </div>
                    </div>

                    <!-- Add more cards for other sections like education, skills, projects, etc. -->
                </div>
            </div>
        </div>
      </section>
      
      <!-- <section> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
<?php include(SHARED_PATH . '/main-footer.php'); ?>

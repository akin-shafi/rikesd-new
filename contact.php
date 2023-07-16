<?php require_once('private/initialize.php'); 
$page_title = "Contact";
?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php //include(SHARED_PATH . '/page-banner.php'); ?>

    

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="section bg-100">
        <div class="container">
          <div class="row align-items-stretch justify-content-center mb-4">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5 class="mb-3">Abuja Nigeria Office</h5>
                  <p class="mb-0 text-1100"> 10, Lord Lugard street,<br />Asokoro Abuja,<br /> Nigeria</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 d-none">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5 class="mb-3">Sydney Office</h5>
                  <p class="mb-0 text-1100"> 62 Collins Street West,<br />Sydney 3000, <br />Australia</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5>Socials</h5>
                  <a class="d-inline-block mt-2" href="https://www.linkedin.com/in/rikesd-global-5a6a84275/"><span class="fab fa-linkedin fs-2 me-2 text-primary"></span></a>
                  <a class="d-inline-block mt-2" href="https://twitter.com/rikesdglobal?s=11&t=r8ddyLnDXZS7xPjADm0Ocg"><span class="fab fa-twitter-square fs-2 mx-2 text-primary"></span></a>
                  <!-- <a class="d-inline-block mt-2" href="#!"><span class="fab fa-facebook-square fs-2 mx-2 text-primary"></span></a> -->
                  <!-- <a class="d-inline-block mt-2" href="#!"><span class="fab fa-google-plus-square fs-2 ms-2 text-primary"></span></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4 d-none">
            <div class="card-body p-5 h-100">
              <div class="googlemap" data-gmap="data-gmap" data-latlng="48.8583701,2.2922873,17" data-scrollwheel="false" data-icon="assets/img/map-marker.png" data-zoom="17" data-theme="Tripitty">
                <div class="marker-content py-3">
                  <h5>Eiffel Tower</h5>
                  <p class="mb-0">Gustave Eiffel's iconic, wrought-iron 1889 tower,<br /> with steps and elevators to observation decks.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body h-100 p-5">
              <h5 class="mb-3">Write to us</h5>
              <form>
                <div class="mb-4"><input class="form-control bg-white" type="text" placeholder="Your Name" required="required" /></div>
                <div class="mb-4"><input class="form-control bg-white" type="email" placeholder="Email" required="required" /></div>
                <div class="mb-4"><textarea class="form-control bg-white" rows="11" placeholder="Enter your descriptions here..." required="required"></textarea></div><button class="btn btn-md-lg btn-primary" type="Submit"> <span class="color-white fw-600">Send Now</span></button>
              </form>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

<?php include(SHARED_PATH . '/main-footer.php'); ?>

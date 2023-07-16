<section class="section" style="background-color: #024c31">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="bg-primary text-white p-5 p-lg-6 rounded-3">
              <h4 class="text-white fs-1 fs-lg-2 mb-1">Sign up for email alerts</h4>
              <p class="text-white">Stay current with our latest insights</p>
              <form class="mt-4">
                <div class="row align-items-center">
                  <div class="col-md-7 pe-md-0">
                    <div class="input-group"><input class="form-control" type="email" placeholder="Enter Email Here" /></div>
                  </div>
                  <div class="col-md-5 mt-3 mt-md-0">
                    <div class="d-grid"><button class="btn btn-success" type="submit"><span class="text-primary fw-semi-bold">Submit</span></button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="row">
              <div class="col-6 col-lg-4 text-white ms-lg-auto">
                <ul class="list-unstyled">
                  <li class="mb-3"><a class="text-white" href="contact">Contact Us</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">FAQ</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Privacy Policy</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Terms of Use</a></li>
                </ul>
              </div>
              <div class="col-6 col-sm-5 ms-sm-auto">
                <ul class="list-unstyled">
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="https://www.linkedin.com/in/rikesd-global-5a6a84275/"> <span class="brand-icon me-3"><span class="fab fa-linkedin-in"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Linkedin</h5>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="https://twitter.com/rikesdglobal?s=11&t=r8ddyLnDXZS7xPjADm0Ocg"> <span class="brand-icon me-3"><span class="fab fa-twitter"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Twitter</h5>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <footer class="footer bg-primary text-center py-4">
      <div class="container">
        <div class="row align-items-center opacity-85 text-white">
          <div class="col-sm-3 text-sm-start"><a href="index"><img src="<?php echo url_for_root('assets/img/logo-dark.png') ?>" width="150" alt="logo" /></a></div>
          <div class="col-sm-6 mt-3 mt-sm-0">
            <p class="lh-lg mb-0 fw-semi-bold">&copy; Copyright <?= date('Y') ?> RikeSD Inc.</p>
          </div>
          <div class="col text-sm-end mt-3 mt-sm-0"><span class="fw-semi-bold">Designed by </span><a class="text-white" href="https://sandsify.com/" target="_blank">Sandsify Systems</a></div>
        </div>
      </div>
    </footer>


    
    <script src="<?php echo url_for_root('assets/js/jquery.min.js') ?>"></script>

    <script src="<?php echo url_for_root('vendors/popper/popper.min.js') ?>"></script>
    <script src="<?php echo url_for_root('vendors/bootstrap/bootstrap.min.js') ?>"></script>
    
    <script src="<?php echo url_for_root('vendors/is/is.min.js') ?>"></script>
    <script src="<?php echo url_for_root('vendors/bigpicture/BigPicture.js') ?>"> </script>
    <script src="<?php echo url_for_root('vendors/countup/countUp.umd.js') ?>"> </script>
    <script src="<?php echo url_for_root('vendors/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?php echo url_for_root('vendors/fontawesome/all.min.js') ?>"></script>
    <script src="<?php echo url_for_root('vendors/lodash/lodash.min.js') ?>"></script>
    <script src="<?php echo url_for_root('vendors/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?php echo url_for_root('vendors/gsap/gsap.js') ?>"></script>
    <script src="<?php echo url_for_root('vendors/gsap/customEase.js') ?>"></script>
    <script src="<?php echo url_for_root('assets/js/theme.js') ?>"></script>

    <script src="<?php echo url_for_root('assets/js/sweetalert2.all.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
      $(document).ready(function(){
        $("#launchModal").modal('show') ;
      
        // Set the launch date and time
        let launchDate = new Date("September 5, 2023 00:00:00").getTime();

        // Update the countdown every second
        let timer = setInterval(function() {
            // Get the current date and time
            let now = new Date().getTime();

            // Calculate the remaining time in milliseconds
            let distance = launchDate - now;

            // Calculate days, hours, minutes, and seconds
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the countdown in the elements with class="countdown"
            $(".countdown").html(days + "d " + hours + "h " + minutes + "m " + seconds + "s ");

            // If the countdown is finished, display a message
            if (distance < 0) {
                clearInterval(timer);
                $(".countdown").html("The event has already started!");
            }
        }, 1000);


        // After adding the Select2 library, apply the plugin to the respective dropdowns

         // Apply Select2 to the "Area of Interest" dropdown
          $('#area-of-interest').select2({
            placeholder: "Select Area of Interest",
            // Additional options and settings can be configured here
          });

          // Apply Select2 to the "Country" dropdown
          $('#country').select2({
            placeholder: "Select Country",
            // Additional options and settings can be configured here
          });

          $('.select2').select2({
            placeholder: "Serach in field",
            // Additional options and settings can be configured here
          });


      });
    

          function successAlert(msg){
              Swal.fire({
                title: msg,
                type: "success",
                showCloseButton: !1,
                focusConfirm: !1,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i> Ok!',
                confirmButtonAriaLabel: "Thumbs up, great!",
                confirmButtonClass: "btn btn-primary",
                buttonsStyling: !1,
              });
          }
          function successTime(msg){
            Swal.fire({
              position: 'bottom-end',
              type:"success",
              title:msg,
              showConfirmButton:!1,
              timer:1000,
            })
          }
          function errorAlert(msg){
              Swal.fire({
                title: msg,
                type: "error",
                showCloseButton: !1,
                timer:1500,
                showCancelButton: !1,
                confirmButtonClass: "btn btn-primary",
                buttonsStyling: !1,
              });
          }
          function errorTime(msg){
            Swal.fire({
              position:"center",
              type:"error",
              title:msg,
              showConfirmButton:!1,
              timer:1500,
              confirmButtonClass:"btn btn-primary",
              buttonsStyling:!1
            })
          }
    </script>
  </body>
</html>
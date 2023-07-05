<?php 
  require_once('../../../private/initialize.php');
  $cert = $_GET['cert'] ?? 1;
  $notary = Certificate::find_by_certificate_no($cert);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $notary->fullname ?> e-Notary Certificate</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://getRikeSD.com/css/bootstrap.min.css">
  <script src="<?php echo url_for('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/jquery_qrcode.min.js') ?>"></script>
</head>
<body>
  <div class="certificate-container">
      <div class="certificate">
          <div class="water-mark-overlay"></div>
          <div class="certificate-header">
              <div class="row">
                <div class="col-md-6">
                  <img src="https://getRikeSD.com/img/main.svg" class="logo" alt="">
                </div>
                <div class="col-md-6 text-right">
                  <div id="qrcode"></div>
                  <?php echo $notary->certificate_no ?>
                </div>

              </div>
          </div>
          <div class="certificate-body">
             
              <!-- <p class="certificate-title"><strong>RENR NCLEX AND CONTINUING EDUCATION (CME) Review Masters</strong></p> -->
              <h1 class="font-1">Certificate of Completion</h1>
              <p class="">Awaded to</p>
              <p class="student-name"><?php echo $notary->fullname ?></p>
              <div>With Commission No. <b><?php echo $notary->commission_no ?></b></div>
              <div class="certificate-content">
                  <div class="about-certificate">
                      <p><i>For successfully completing the training requirements for RikeSD</i></p>
                  </div>
                  <p class="topic-title">
                      e-Notary
                  </p>
                  <div class="text-center">
                      <p class="topic-description font-weight-bold">on this day <?php echo date('F d, Y', strtotime($notary->created_at)) ?> </p>
                  </div>

                  <div>
                    This certificate is awarded in recognition of achivement and commitment to delivering the highest degree of customer service no the platform
                  </div>
              </div>
              <div class="certificate-footer mt-5">
                  <div class="row font-weight-bold">
                      <div class="col-md-6">
                          <!-- Name -->
                      </div>
                      <div class="col-md-6">
                          Fikayo Durosinmi-Etti
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 ">
                          <!-- Position -->
                      </div>
                      <div class="col-md-6">
                          Training Specialist.
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
<input type="hidden" id="cert_id" value="<?php echo $notary->certificate_no ?>">
<script type="text/javascript">
   var cert_id = $('#cert_id').val();
    $('#qrcode').qrcode(
    {
        text: "https:///getRikeSD.com/app/public/classroom/certificate.php?cert=" + cert_id,
        size: 80,
        // text: "https://getRikeSD.com#solutions"
    });
   $(document).ready(function() {
         setTimeout(function(){
             window.print(); 
         }, 1000);//wait 1 seconds
         
         setTimeout(function(){
             window.close();
         }, 1000);//wait 1 seconds
      });
</script>
</html>
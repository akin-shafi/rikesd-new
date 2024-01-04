<?php require_once('../private/initialize.php'); 
$page_title = 'Start a project';
?>
<?php include(SHARED_PATH . '/main-header.php'); ?>

<style>

</style>
      <!-- <section> begin ============================-->
      <section class="section bg-100 container-fluid">
        <div class="row">
            <div class="col-md-9 col-lg-6 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <h4 class="text-uppercase fs-0 fs-md-1 text-center">Start a project</h4>
              <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
                
                <div class="card-body p-md-5" id="formbody">
                  
                  <h6 class="text-uppercase text-muted  text-end" >Step <span id="step">1</span></h6>

                  <form id="stepForm" method="post" class="needs-validation" novalidate>
                        <div class="step" id="step1">
                            <h5>What is your need ?</h5>
                            <div class="mb-3">
                            <label for="need">I am look for :</label>
                            
                            <select class="form-control select2" id="need" name="need" required>
                                <option value="">Select</option>
                                <?php foreach(ResearchNeed::find_by_undeleted(['order' => 'ASC']) as $value): ?>
                                 <option value="<?php echo $value->need ?>"><?php echo $value->need ?></option>
                                <?php endforeach; ?>
                                    
                            </select>
                            <div class="invalid-feedback">Please select a need.</div>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-primary btn-next">Proceed</button>
                            </div>
                        </div>

                        <div class="step" id="step2" style="display: none;">
                            <h5>Enter your email</h5>
                            <div class="mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-primary btn-next">Proceed</button>
                            </div>
                        </div>

                        

                        <div class="step" id="step3" style="display: none;">
                            <h5>Select your project/business category and Sub-Category</h5>
                            <div class="mb-3">
                                <label for="profession">Select Category:</label>
                                <select class="form-control select2" id="profession" name="profession" required>
                                    <option value="">Select</option>
                                    
                                </select>
                                <div class="invalid-feedback">Please select a profession.</div>
                            </div>
                            <div class="mb-3">
                                <label for="specialization">Select Sub-Category:</label>
                                <select class="form-control select2" id="specialization" name="specialization" required>
                                    <option value="">Select</option>
                                    
                                </select>
                                <div class="invalid-feedback">Please select a specialization.</div>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-secondary btn-prev">Previous</button>
                                <button type="button" class="btn btn-primary btn-next">Next</button>
                            </div>
                        </div>

                        <div class="step" id="step4" style="display: none;">
                            <h5>Enter your Project Description</h5>
                            <div class="mb-3">
                            <label for="otp">Description:</label>
                            <!-- <textarea type="text" class="form-control" id="description" style="min-height: 200px" name="description" required minlength="150" maxlength="300"></textarea> -->
                            <textarea type="text" class="form-control" id="description" style="min-height: 200px" name="description" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a description between 150 and 300 characters.
                            </div>

                            <div class="invalid-feedback">Please enter the description.</div>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-secondary btn-prev">Previous</button>
                                <button type="button" class="btn btn-primary btn-next">Next</button>
                            </div>
                        </div>

                        <div class="step" id="step5" style="display: none;">
                            <h5>Enter your Personal Information</h5>
                            <div class="mb-3">
                            <label for="firstname">First Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                                <div class="invalid-feedback">Please enter your first name.</div>
                            </div>
                            <div class="mb-3">
                            <label for="lastname">Last Name:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                                <div class="invalid-feedback">Please enter your last name.</div>
                            </div>
                            <div class="mb-3">
                            <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>
                            <div class="mb-3">
                            <label for="country">Country of Residence:</label>
                                <!-- <input type="text" class="form-control" id="country" name="country" required> -->
                                <select class="form-control select2" id="country" name="country" required>
                                    <option value=""></option>
                                    <?php foreach (Countries::find_all() as $key => $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">Please enter your country of residence.</div>
                            </div>
                            <div class="mb-3">
                                <label for="state">State:</label>
                                <input type="text" class="form-control" id="state" name="state" required>
                                <div class="invalid-feedback">Please enter your state.</div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Home/Office Address:</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                                <div class="invalid-feedback">Please enter your address.</div>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-secondary btn-prev">Previous</button>
                                <button type="submit" class="btn btn-success" id="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>


               
                <div class="card-body p-md-5 text-center" style="display: none" id="successMsg">
                    <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem;"></i>
           
                    <h5 class="text-uppercase mt-5 ls  fs-0 fs-md-1" data-zanim-xs='{"delay":0.2}'>Form Submitted Successfully</h5>
                    <h6 class=" " data-zanim-xs='{"delay":0.3}'>We will be in touch shortly.</h6>
                    <div data-zanim-xs='{"delay":0.4}'><a class="btn btn-lg btn-warning rounded-pill mt-4" href="<?= url_for_root('/') ?>">Return to Home</a></div>
                </div>
              
              </div>
            </div>
        </div>
      </section>
      
      <!-- <section> close ============================-->

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
<input type="hidden" id="eUrl" value="<?= url_for_root('/login') ?>">
<?php include(SHARED_PATH . '/main-footer.php'); ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script> -->
<script>
$(document).ready(function() {
var currentStep = 1;
var totalSteps = $('.step').length;



$('.btn-next').click(function () {
   var isValid = true;
   var currentForm = $('#stepForm')[0];

   // Check the validity of each field in the current step
   $('#step' + currentStep).find('input, select').each(function () {
      if (!this.validity.valid) {
         isValid = false;
         $(this).addClass('is-invalid');
      } else {
         $(this).removeClass('is-invalid');
      }
   });
   

  

   if (!isValid) {
      currentForm.classList.add('was-validated');
      return;
   }

   if (currentStep === 2) {
      var email = $('#email').val();
      var eUrl = $('#eUrl').val();
      $.ajax({
         url: 'script/process.php',
         method: 'POST',
         data: {
            checkEmail: 1,
            email: email
         },
         dataType: 'json',
         success: function (response) {
            if (response.success === true) {
                if (confirm(response.msg)) {
                     window.location.href = eUrl;
                } 
               // Replace the URL with your login page
              
            } else {
               currentForm.classList.remove('was-validated');
               goToNextStep();
            }
         },
         error: function () {
            errorAlert('An error occurred. Please try again.');
         }
      });
   }else {
      currentForm.classList.remove('was-validated');
      goToNextStep();
   }
});

$('.btn-prev').click(function() {
  goToPreviousStep();
});

function goToNextStep() {
  var isValid = true;
  var currentForm = $('#stepForm')[0];

  // Check the validity of each field in the current step
  $('#step' + currentStep).find('input, select, textarea').each(function() {
    if (!this.checkValidity()) {
        isValid = false;
        $(this).addClass('is-invalid');
    } else {
        $(this).removeClass('is-invalid');
    }
});

  if (isValid) {
    $('#step' + currentStep).hide();
    currentStep++;
    $('#step' + currentStep).show();
    updateProgressCount();
  }
}

function goToPreviousStep() {
  $('#step' + currentStep).hide();
  currentStep--;
  $('#step' + currentStep).show();
  updateProgressCount();
}

function updateProgressCount() {
  $('#step').text(currentStep + ' of ' + totalSteps);
}


$(document).on("change", "#profession", function (e) {
    var categoryId = $(this).val(); 
    let s = '';

    $('#specialization').empty();
    $('#specialization').append('<option value="">Select a subcategory</option>');

    if (categoryId !== '') {
      // Make Ajax request to fetch subcategories based on the selected category
      $.ajax({
        url: 'script/process.php',
        type: 'GET',
        data: { fetch_profession: 1, profession: categoryId },
        dataType: 'json',
        success: function(response) {
          if (response.specialization.length > 0) {
            // Populate the subcategory select with fetched options
            $.each(response.specialization, function(index, subcategory) {
              $('#specialization').append('<option value="' + subcategory.id + '">' + subcategory.sub_profession + '</option>');
            });
          } else {
            $('#specialization').append('<option value="">No subcategories available</option>');
          }
        },
        error: function() {
          $('#specialization').append('<option value="">Error fetching subcategories</option>');
        }
      });
    }

    
});

fetch_profession(p='', s='')
function fetch_profession(profession, specialization){
    $.ajax({
        url: 'script/process.php',
        method: 'GET',
        data: {
            fetch_profession: 1,
            profession: profession,
            specialization: specialization,
        },
        dataType: 'json',
        success: function(response) {
          // Populate options in the select dropdown
          var selectPro = $("#profession");
          var selectSpec = $("#specialization");
     
          $.each(response.professions, function(index, option) {
            selectPro.append($("<option>").text(option.profession).val(option.id));
          });
        },
        error: function(xhr, status, error) {
          console.log("An error occurred while fetching options: " + error);
        }
       
    });
}

$('#submit').click(function (e) {
    e.preventDefault();
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var email = $("#email").val();
    var phone = $("#phone").val();



    var isValid = true;
    $('#step' + currentStep).find('input, select, textarea').each(function() {
        if (!this.checkValidity()) {
            isValid = false;
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid');
        }
    });

    if (isValid) {
        $.ajax({
            url: 'script/process.php',
            method: 'POST',
            data: $("#stepForm").serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.success === true) {
                    // errorAlert(response.msg);
                    $("#formbody").hide()
                    $("#successMsg").show();
                    successAlert(response.msg);

                    $("form").trigger("reset");
                    RequestSuccessMail(firstname, lastname, email, phone);



                    // $(this).closest('form').find("input[type=text], select, textarea").val("");
                } else {
                    errorAlert(response.msg);
                }
            },
            error: function () {
                errorAlert(error);
                errorAlert('An error occurred. Please try again.');
            }
        });
    }
});



function RequestSuccessMail(firstname, lastname, email, phone){
        $.ajax({
            url: '../app/processor/RequestSuccessMail.php',
            method:"POST",
            data: {
                RequestSuccessMail: 1,
                firstname: firstname,
                lastname: lastname,
                email: email,
                phone: phone,
            },
            dataType: "json",
            success: function (r) {
                if (r.success == true) {
                    RequestNoticeMail(firstname, lastname, email, phone)
                   
                }else{
                    errorAlert("Success email not sent")
                }
            }
        })
    }
    function RequestNoticeMail(firstname, lastname, email, phone, trans_type, req_no, referral_no){
        $.ajax({
            url: '../app/processor/RequestNoticeMail.php',
            method:"POST",
            data: {
                RequestNoticeMail: 1,
                firstname: firstname,
                lastname: lastname,
                email: email,
                phone: phone,
            },
            dataType: "json",
            success: function (data) {
                if (data.success == true) {
                     successTime(data.msg);
                }else{
                    errorAlert("Success email not sent")
                }
            }
        })
    }


});
  </script>

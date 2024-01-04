<?php
// $__DotEnvironment = new DotEnvironment(realpath(__DIR__."\..\.env"));
// $country_api_auth = $_ENV['COUNTRY_API_AUTH'];
// echo $country_api_auth;
?>

<div class="container">
    <h5 class="my-4">Institution Registration</h5>
    <p class="lead">Dear Representative,</p>
    <p>Thank you for your interest in registering your institution. This registration aims to facilitate collaboration
        and engagement between your institution and various academic and industry partners.</p>
    <p>Please complete the form below to register your institution. Provide accurate details to enhance the registration
        process.</p>
    <form id="institutionRegistrationForm" class="row">
        <div class="form-group mb-3 col-lg-6">
            <label for="institutionName" class="form-label">Institution Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="institutionName" name="institutionName" required>
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label for="institutionType" class="form-label">Institution Type <span class="text-danger">*</span></label>
            <select class="form-control" id="institutionType" name="institutionType" required>
                <option value="">Select Institution Type</option>
                <option value="University">University</option>
                <option value="College">College</option>
                <option value="Research Institute">Research Institute</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
            <select class="form-control" name="country" id="countrySelect" required>
                <option value="">Select a Country</option>
                <!-- Add country options here -->
            </select>
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label for="city" class="form-label">City <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label for="description" class="form-label">Institution Description <span
                    class="text-danger">*</span></label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label for="goals" class="form-label">Institution Goals <span class="text-danger">*</span></label>
            <textarea class="form-control" id="goals" name="goals" rows="3" required></textarea>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label for="contactPerson" class="form-label">Contact Person <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="contactPerson" name="contactPerson" required>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label for="contactPersonRole" class="form-label">Contact Person Role <span
                    class="text-danger">*</span></label>
            <input type="text" class="form-control" id="contactPersonRole" name="contactPersonRole" required>
        </div>
        <button type="submit" id="registrationSubmitButton" class="btn btn-primary">Submit Registration</button>

        <div id="registrationProcessingMessage" style="display: none;">Processing...</div>
    </form>
    <button id="send-mail" type="button" class="btn btn-primary mt-4">Send mail</button>
    <div id="registrationResponseMessage"></div>
</div>



<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>





    let countriesData = []; // Variable to store countries data

    async function fetchCountriesAndCities() {
        try {
            const response = await axios.get('https://countriesnow.space/api/v0.1/countries');
            countriesData = response.data.data;
            return countriesData;
        } catch (error) {
            console.error('Error fetching countries:', error);
            throw error;
        }
    }

    function populateCountries() {
        const countrySelect = document.getElementById('countrySelect');
        countrySelect.innerHTML = '<option value="">Select a Country</option>';
        countriesData.forEach(countryData => {
            const option = document.createElement('option');
            option.value = countryData.country;
            option.textContent = countryData.country;
            countrySelect.appendChild(option);
        });
    }

    function populateCities() {
        const selectedCountryCode = document.getElementById('countrySelect').value;
        const citySelect = document.getElementById('citySelect');

        if (selectedCountryCode) {
            try {
                const selectedCountryData = countriesData.find(countryData => countryData.country === selectedCountryCode);

                if (selectedCountryData) {
                    const citiesData = selectedCountryData.cities;
                    citySelect.innerHTML = '<option value="">Select a City</option>';

                    citiesData.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city;
                        option.textContent = city;
                        citySelect.appendChild(option);
                    });
                }
            } catch (error) {
                console.error('Error fetching cities:', error);
            }
        } else {
            // Clear the second select dropdown if no country is selected
            citySelect.innerHTML = '<option value="">Select a City</option>';
        }
    }

    // Fetch countries when the page loads and populate the country dropdown
    document.addEventListener('DOMContentLoaded', () => {
        fetchCountriesAndCities()
            .then(() => {
                populateCountries();
            })
            .catch(error => {
                console.error('Error fetching countries and cities:', error);
            });
    });


    $(document).ready(function () {


        // Attach a click event handler to the submit button
        $('#myForm').on('submit', function (e) {
            e.preventDefault()
            var firstname = $("#institutionName").val();
            // var lastname = $("#lastname").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            $('#submitButton').prop('disabled', true);

            // Show the "Processing..." message
            $('#processingMessage').show();

            // Serialize the form data
            var formData = $(this).serialize();

            // Send the AJAX request to the backend PHP file
            $.ajax({
                url: 'script/submit_form.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    // Handle the response from the backend
                    if (response.success == true) {
                        successAlert(response.msg);
                        // window.location.reload()
                        $(this).trigger("reset");
                        RequestSuccessMail(firstname, email, phone)
                    } else {
                        // alert(response.msg);
                        errorAlert(response.msg);
                        // $('#responseMessage').addClass("py-2 text-center text-white mt-2 text-danger");
                    }

                },
                complete: function () {
                    // Re-enable the submit button and hide the "Processing..." message after the response is received
                    $('#submitButton').prop('disabled', false);
                    $('#processingMessage').hide();
                }
            });
        });


        function RequestSuccessMail(firstname, email, phone) {
            $.ajax({
                url: '../app/processor/RequestSuccessMail.php',
                method: "POST",
                data: {
                    RequestSuccessMail: 1,
                    firstname: firstname,
                    email: email,
                    phone: phone,
                },
                dataType: "json",
                success: function (r) {
                    if (r.success == true) {
                        RequestNoticeMail(firstname, email, phone)

                    } else {
                        errorAlert("Success email not sent")
                    }
                }
            })
        }
        function RequestNoticeMail(firstname, email, phone) {
            $.ajax({
                url: '../app/processor/RequestNoticeMail.php',
                method: "POST",
                data: {
                    RequestNoticeMail: 1,
                    firstname: firstname,
                    email: email,
                    phone: phone,
                },
                dataType: "json",
                success: function (data) {
                    if (data.success == true) {
                        successTime(data.msg);
                    } else {
                        errorAlert("Success email not sent")
                    }
                }
            })
        }
    });

</script>
<?php
// $__DotEnvironment = new DotEnvironment(realpath(__DIR__."\..\.env"));
// $country_api_auth = $_ENV['COUNTRY_API_AUTH'];
// echo $country_api_auth;
?>

<div class="container ">

    <!-- <div class="" data-zanim-timeline="{}" data-zanim-trigger="scroll"> -->
    <h5 class="my-4">Academic Industry Mobility Application</h5>
    <p class="lead">Dear Academic Professional,</p>
    <p>Thank you for your interest in the Academic Industry Mobility Program. This program aims to connect academic
        experts like yourself with industry professionals to foster collaboration, knowledge exchange, and innovation.
    </p>
    <p>Please fill out the form below to apply for the program. Highlight your qualifications, expertise, and motivation
        for participation to enhance your chances of selection.</p>
    <form id="myForm" class="row">
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
            <label for="institution" class="form-label">Academic Institution <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="institution" name="institution" required>
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
            <select class="select2 form-control" name="country" id="countrySelect" onchange="populateCities()" required>
                <option value="">Select a Country</option>
            </select>
        </div>

        <div class="form-group mb-3 col-lg-6">
            <label for="state" class="form-label">cities <span class="text-danger">*</span></label>
            <select class="select2 form-control" id="citySelect" name="city" required>
                <option value="">Select a State</option>
            </select>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label for="expertise" class="form-label">Areas of Expertise <span class="text-danger">*</span></label>
            <textarea class="form-control" id="expertise" name="expertise" rows="3" required></textarea>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label for="interests" class="form-label">Research Interests <span class="text-danger">*</span></label>
            <textarea class="form-control" id="interests" name="interests" rows="3" required></textarea>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label for="motivation" class="form-label">Motivation for Participation <span
                    class="text-danger">*</span></label>
            <textarea class="form-control" id="motivation" name="motivation" rows="3" required></textarea>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label for="availability" class="form-label">Availability for Mobility <span
                    class="text-danger">*</span></label>
            <input type="text" class="form-control" id="availability" name="availability" required>
        </div>
        <input type="hidden" name="academia">
        <button type="submit" id="submitButton" class="btn btn-primary">Submit Application</button>
        <button id="sendMail" class="btn btn-primary">Send mail</button>
        <div id="processingMessage" style="display: none;">Processing...</div>
    </form>
    <div id="responseMessage"></div>
    <!-- </div> -->



</div>


<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    $(document).on('click', '#sendMail', function (e) {
        e.preventDefault()
        $.ajax({
            url: '../app/processor/RequestSuccessMail.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                // Handle the response from the backend
                if (response.success == true) {
                    successAlert(response.msg);
                    // window.location.reload()
                    $(this).trigger("reset");
                } else {
                    // alert(response.msg);
                    errorAlert(response.msg);
                    // $('#responseMessage').addClass("py-2 text-center text-white mt-2 text-danger");
                }

            },

        });
    });


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
    });

</script>
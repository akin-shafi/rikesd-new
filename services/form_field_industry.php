<div class="container ">
    
    <h5 class="my-4">Industry Expert Request Form</h5>
    <p class="lead">Dear Industry Professional,</p>
    <p>Thank you for your interest in our Industry Expert Request service. If you have a problem or challenge that requires the expertise and knowledge of an academic professional, we are here to assist you.</p>
    <p>Please fill out the form below to request an industry expert. Provide details about the problem you want to solve, the areas of expertise required, and any specific requirements or preferences you have. 
        Our team will match you with a suitable academic expert who can collaborate with you to address your needs.</p>

    <form class="row" id="myForm" method="POST">
        <div class="form-group mb-3 col-lg-6">
            <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
            <input type="phone" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label for="company" class="form-label">Company/Organization <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="company" name="company" required>
        </div>

        <div class="form-group mb-3 col-lg-6">
            <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
            <select  class="select2 form-control" name="country"  id="countrySelect" onchange="populateCities()" required>
                <option value="">Select a Country</option>
            </select>
        </div>
        
        <div class="form-group mb-3 col-lg-6">
            <label for="state" class="form-label">cities <span class="text-danger">*</span></label>
            <select class="select2 form-control"  id="citySelect" name="city" required>
                <option value="">Select a State</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="problem" class="form-label">Problem/Challenge Description</label>
            <textarea class="form-control" id="problem" name="problem" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="expertise" class="form-label">Required Areas of Expertise</label>
            <textarea class="form-control" id="expertise" name="expertise" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="requirements" class="form-label">Specific Requirements/Preferences</label>
            <textarea class="form-control" id="requirements" name="requirements" rows="3"></textarea>
        </div>
        <input type="hidden" name="industry">
        <button type="submit" id="submitButton" class="btn btn-primary">Submit Request</button>
    </form>
       
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


$(document).ready(function() {
    // Attach a click event handler to the submit button
    $('#myForm').on('submit', function(e) {
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
            success: function(response) {
                // Handle the response from the backend
                if(response.success == true){
                    successAlert(response.msg);
                    // window.location.reload()
                    $(this).trigger("reset");
                    
                }else{
                    // alert(response.msg);
                    errorAlert(response.msg);
                    $('#responseMessage').addClass("py-2 text-center text-white mt-2 text-danger");
                }
                
            },
            complete: function() {
                // Re-enable the submit button and hide the "Processing..." message after the response is received
                $('#submitButton').prop('disabled', false);
                $('#processingMessage').hide();
            }
        });
    });
});

</script>
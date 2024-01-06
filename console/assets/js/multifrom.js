initMultiStepForm();

function initMultiStepForm() {
	const progressNumber = document.querySelectorAll(".step").length;
	const slidePage = document.querySelector(".slide-page");
	const submitBtn = document.querySelector(".submit");
	const progressText = document.querySelectorAll(".step p");
	const progressCheck = document.querySelectorAll(".step");
	const bullet = document.querySelectorAll(".step .bullet");
	const pages = document.querySelectorAll(".page");
	const nextButtons = document.querySelectorAll(".next");
	const prevButtons = document.querySelectorAll(".prev");
	const stepsNumber = pages.length;

	if (progressNumber !== stepsNumber) {
		console.warn(
			"Error, number of steps in progress bar do not match number of pages"
		);
	}
	$(document).on("input", "#emailInput", function () {
		// Clear the text inside the div with id "divToClear"
		$(".emailRequired").text("");
	});

	document.documentElement.style.setProperty("--stepNumber", stepsNumber);

	$("#acceptance-term-privacy-checkbox").change(function () {
		// Toggle the visibility of the warning div based on the checkbox state
		$("#warningMsg").toggle(!$(this).prop("checked"));
	});

	$("input[name='company_size']").click(function () {
		// Hide the div with id "divToHide"
		$(".invalid-required-companysize").hide();
	});

	let current = 1;

	for (let i = 0; i < nextButtons.length; i++) {
		nextButtons[i].addEventListener("click", function (event) {
			event.preventDefault();

			inputsValid = validateInputs(this);
			function nextStep() {
				slidePage.style.marginLeft = `-${(100 / stepsNumber) * current}%`;
				bullet[current - 1].classList.add("active");
				progressCheck[current - 1].classList.add("active");
				progressText[current - 1].classList.add("active");
				current += 1;
				console.log("Check Validity", current);
			}

			if (!inputsValid) {
				if (current == 1) {
					var email = $("#emailInput").val();
					// Make sure the email is not empty
					if (email.trim() === "") {
						$(".emailRequired").text("Please enter an active email!!");
						return;
					}

					if (!$("#acceptance-term-privacy-checkbox").prop("checked")) {
						$("#warningMsg").css("display", "block");
						return;
					}
				} else if (current == 2) {
					console.log("Please select one of the above options.", current);
					$(".invalid-required-companysize").css("display", "block");
				}
			} else {
				var email = $("#emailInput").val();
				if (current == 1) {
					$.ajax({
						type: "POST",
						url: "backend/process.php", // Replace with your backend URL
						data: { checkEmail: 1, email: email },
						dataType: "json",
						success: function (response) {
							// Handle the response from the backend
							if (response.success == true) {
								nextStep();
							} else {
								$(".emailRequired").text("This email is already registered.");
							}
						},
						error: function (error) {
							console.log("Error:", error);
						},
					});
				} else {
					nextStep();
				}
			}
		});
	}

	for (let i = 0; i < prevButtons.length; i++) {
		prevButtons[i].addEventListener("click", function (event) {
			event.preventDefault();
			slidePage.style.marginLeft = `-${(100 / stepsNumber) * (current - 2)}%`;
			bullet[current - 2].classList.remove("active");
			progressCheck[current - 2].classList.remove("active");
			progressText[current - 2].classList.remove("active");
			current -= 1;
		});
	}
	submitBtn.addEventListener("click", function () {
		// bullet[current - 1].classList.add("active");
		progressCheck[current - 1].classList.add("active");
		progressText[current - 1].classList.add("active");
		current += 1;
		console.log("Submit");
		setTimeout(function () {
			// alert("Your Form Successfully Signed up");
			// location.reload();
		}, 800);
	});

	function validateInputs(ths) {
		let inputsValid = true;
		const inputs = ths.parentElement.parentElement.querySelectorAll("input");
		for (let i = 0; i < inputs.length; i++) {
			const valid = inputs[i].checkValidity();
			if (!valid) {
				inputsValid = false;
				inputs[i].classList.add("invalid-input");
			} else {
				inputs[i].classList.remove("invalid-input");
			}
		}
		return inputsValid;
	}

	// $(document).on("input", "#password", function () {
	// 	console.log("Pressed");
	// 	passwordChanged();
	// 	return;
	// });

	let state = false;
	let password = document.getElementById("password");
	let passwordStrength = document.getElementById("password-strength");
	let lowUpperCase = document.querySelector(".low-upper-case i");
	let number = document.querySelector(".one-number i");
	let specialChar = document.querySelector(".one-special-char i");
	let eightChar = document.querySelector(".eight-character i");

	password.addEventListener("keyup", function () {
		let pass = document.getElementById("password").value;
		checkStrength(pass);
	});

	function toggle() {
		if (state) {
			document.getElementById("password").setAttribute("type", "password");
			state = false;
		} else {
			document.getElementById("password").setAttribute("type", "text");
			state = true;
		}
	}

	function myFunction(show) {
		show.classList.toggle("fa-eye-slash");
	}

	function checkStrength(password) {
		let strength = 0;

		//If password contains both lower and uppercase characters
		if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
			strength += 1;
			lowUpperCase.classList.remove("fa-circle");
			lowUpperCase.classList.add("fa-check");
		} else {
			lowUpperCase.classList.add("fa-circle");
			lowUpperCase.classList.remove("fa-check");
		}
		//If it has numbers and characters
		if (password.match(/([0-9])/)) {
			strength += 1;
			number.classList.remove("fa-circle");
			number.classList.add("fa-check");
		} else {
			number.classList.add("fa-circle");
			number.classList.remove("fa-check");
		}
		//If it has one special character
		if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
			strength += 1;
			specialChar.classList.remove("fa-circle");
			specialChar.classList.add("fa-check");
		} else {
			specialChar.classList.add("fa-circle");
			specialChar.classList.remove("fa-check");
		}
		//If password is greater than 7
		if (password.length > 7) {
			strength += 1;
			eightChar.classList.remove("fa-circle");
			eightChar.classList.add("fa-check");
		} else {
			eightChar.classList.add("fa-circle");
			eightChar.classList.remove("fa-check");
		}

		// If value is less than 2
		if (strength < 2) {
			passwordStrength.classList.remove("progress-bar-warning");
			passwordStrength.classList.remove("progress-bar-success");
			passwordStrength.classList.add("progress-bar-danger");
			passwordStrength.style = "width: 10%";
		} else if (strength == 3) {
			passwordStrength.classList.remove("progress-bar-success");
			passwordStrength.classList.remove("progress-bar-danger");
			passwordStrength.classList.add("progress-bar-warning");
			passwordStrength.style = "width: 60%";
		} else if (strength == 4) {
			passwordStrength.classList.remove("progress-bar-warning");
			passwordStrength.classList.remove("progress-bar-danger");
			passwordStrength.classList.add("progress-bar-success");
			passwordStrength.style = "width: 100%";
		}
	}

	$(document).on("click", "#showPassword", function () {
		showPass();
		return;
	});
	function showPass() {
		var passwordField = document.getElementById("password");
		// Toggle the type attribute between "password" and "text"
		if (passwordField.type === "password") {
			passwordField.type = "text";
		} else {
			passwordField.type = "password";
		}
	}
}

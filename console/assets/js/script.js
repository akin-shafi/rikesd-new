(function ($) {
	"use script";
	// Preeloader
	$(window).on("load", function (event) {
		$("#preloader").delay(500).fadeOut(500);
	});
	//Nice Select
	// $("select").niceSelect();

	$(function () {
		// Get the form.
		var form = $("#contact-form");

		// Get the messages div.
		var formMessages = $(".ajax-response");
		var formClass = $(".np-btn-success, .from-successfull-complete-done");

		// Set up an event listener for the contact form.
		$(form).submit(function (e) {
			// Stop the browser from submitting the form.
			e.preventDefault();

			// Serialize the form data.
			var formData = $(form).serialize();
			// Append the additional parameter
			formData += "&registration=1";
			// Submit the form using AJAX.
			$.ajax({
				type: "POST",
				url: $(form).attr("action"),
				data: formData,
				dataType: "json",
				success: function (response) {
					// Handle the response from the backend
					if (response.success == true) {
						var fullUrl = $("#base_url").val();

						console.log(fullUrl);
						window.location.href = fullUrl + "/verify-email.php";

						$(formMessages).removeClass("error");
						$(formMessages).addClass("success");
						$(formClass).addClass("success");

						// Set the message text.
						$(formMessages).text(response.msg);

						// Clear the form.
						$("#contact-form input,#contact-form textarea").val("");
					} else {
						// Make sure that the formMessages div has the 'error' class.
						$(formMessages).removeClass("success");
						$(formMessages).addClass("error");
						$(formClass).addClass("error");

						// Set the message text.
						$(formMessages).text(response.msg);
					}
				},
			});

			// .done(function (response) {
			// 	// Make sure that the formMessages div has the 'success' class.

			// 	var baseUrl = window.location.protocol + "//" + window.location.host;

			// 	console.log(baseUrl);
			// 	// window.location.href = baseUrl + "/verify-email.php";

			// 	$(formMessages).removeClass("error");
			// 	$(formMessages).addClass("success");
			// 	$(formClass).addClass("success");

			// 	// Set the message text.
			// 	$(formMessages).text(response);

			// 	// Clear the form.
			// 	$("#contact-form input,#contact-form textarea").val("");
			// })
			// .fail(function (data) {
			// 	// Make sure that the formMessages div has the 'error' class.
			// 	$(formMessages).removeClass("success");
			// 	$(formMessages).addClass("error");
			// 	$(formClass).addClass("error");

			// 	// Set the message text.
			// 	if (data.responseText !== "") {
			// 		$(formMessages).text(data.responseText);
			// 	} else {
			// 		$(formMessages).text(
			// 			"Oops! An error occured and your message could not be sent."
			// 		);
			// 	}
			// });
		});
	});
})(jQuery);

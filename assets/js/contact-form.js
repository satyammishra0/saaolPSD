function contactForm(event) {
  var formData = $("#contact-form").serialize();
  event.preventDefault();
  $("#submitBtn").prop("disabled", true);
  $("#custom-loader-container").show();

  $.ajax({
    type: "POST",
    url: "../backend/contact-form-submit.php",
    data: formData,
    success: function (response) {
      alert(response);
      location.reload();
    },
    error: function (errorThrown) {
      $("#custom-loader-container").hide();
      alert(errorThrown);
    },
    complete: function () {
      // Enable submit button and hide loader-container after completion
      $("#submitBtn").prop("disabled", false);
      $("#custom-loader-container").hide();
    },
  });
}

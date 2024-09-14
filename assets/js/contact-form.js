const phoneInput = document.querySelector("#phone");
const iti = window.intlTelInput(phoneInput, {
  initialCountry: "in",
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

phoneInput.addEventListener("blur", function () {
  const fullPhoneNumber = iti.getNumber();
  const countryData = iti.getSelectedCountryData();
  const countryCode = countryData.dialCode;

  document.querySelector("#fullPhoneNumber").value = fullPhoneNumber;
  document.querySelector("#countryCode").value = countryCode;
});

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
      $("#submitBtn").prop("disabled", false);
      $("#custom-loader-container").hide();
    },
  });
}

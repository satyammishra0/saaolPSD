$(document).ready(function () {
  $("#submit-btn").click(function (event) {
    event.preventDefault(); // Prevent default form submission
    $("#custom-loader-container").show();

    // Collect form data
    var formData = {
      name: $("#name").val(),
      phone: $("#phone").val(),
      email: $("#email").val(),
      high_blood_pressure: $('input[name="high_blood_pressure"]:checked').val(),
      diabetes: $('input[name="diabetes"]:checked').val(),
      family_history: $('input[name="family_history"]:checked').val(),
      overweight: $('input[name="overweight"]:checked').val(),
      smoking: $('input[name="smoking"]:checked').val(),
      walking: $('input[name="walking"]:checked').val(),
      diet: $('input[name="diet"]:checked').val(),
      fruits_salads: $('input[name="fruits_salads"]:checked').val(),
      stress: $('input[name="stress"]:checked').val(),
      cholesterol: $('input[name="cholesterol"]:checked').val(),
    };

    $.ajax({
      url: "../backend/assess-risk-form.php",
      type: "POST",
      data: formData,
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          alert(response.message);
          $("#custom-loader-container").hide();
          location.reload();
        } else {
          alert(response.message);
          $("#custom-loader-container").hide();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert("An error occurred: " + errorThrown);
        $("#custom-loader-container").hide();
      },
    });
  });
});

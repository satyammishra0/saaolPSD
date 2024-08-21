function handleConsultationType() {
  var consultationType = document.getElementById("consultationType").value;
  var countryContainer = document.getElementById("countryContainer");
  var stateContainer = document.getElementById("stateContainer");
  var centerContainer = document.getElementById("centerContainer");

  if (consultationType === "inPerson") {
    countryContainer.style.display = "block";
  } else {
    countryContainer.style.display = "none";
    stateContainer.style.display = "none";
    centerContainer.style.display = "none";
  }
}

function handleCountry() {
  var country = document.getElementById("country").value;
  var stateContainer = document.getElementById("stateContainer");

  var selectedState = document.getElementById("state").value;
  var centerOptions = document.getElementById("center");
  // Reset center options
  centerOptions.innerHTML = "";

  // Reset state options
  document.getElementById("state").innerHTML = "";

  if (country === "india") {
    addOptions("state", [
      "Andhra Pradesh",
      "Assam",
      "Bihar",
      "Chhattisgarh",
      "Delhi NCR",
      "Jharkhand",
      "Goa",
      "Gujarat",
      "Haryana",
      "Jammu",
      "Karnataka",
      "Kerala",
      "Maharashtra",
      "Madhya Pradesh",
      "Odisha",
      "Punjab",
      "Rajasthan",
      "Tamil Nadu",
      "Telangana",
      "Uttarakhand",
      "Uttar Pradesh",
      "West Bengal",
    ]);
  } else if (country === "bangladesh") {
    addOptions("state", ["Dhaka", "Chittagong", "Sylhet"]);
  } else if (country === "nepal") {
    addOptions("state", ["Kathmandu"]);
  }

  // Display state container
  stateContainer.style.display = "block";
}

function handleState() {
  // Implement the logic to fetch and populate center options based on the selected state using AJAX
  populateCenterOptions();
}

function populateCenterOptions() {
  var selectedState = document.getElementById("state").value;
  var centerOptions = document.getElementById("center");

  // Reset center options
  centerOptions.innerHTML = "";
  $("#custom-loader-container").show();
  // Fetch centers based on the selected state using AJAX
  $.ajax({
    url: "https://saaol.com/form-logic/centers.php",
    // url: "./form-logic/centers.php",
    type: "GET",
    data: {
      selectedState: selectedState,
    },
    dataType: "json",
    success: function (data) {
      addOptions("center", data);
      // Display center container
      $("#custom-loader-container").hide();
      document.getElementById("centerContainer").style.display = "block";
    },
    error: function (error) {
      alert(error);
      $("#custom-loader-container").hide();
    },
  });
}

function addOptions(selectId, optionsArray) {
  var selectElement = document.getElementById(selectId);

  // Clear existing options
  selectElement.innerHTML = "";

  var defaultOption = document.createElement("option");
  defaultOption.value = "";
  defaultOption.text = "Please select";
  defaultOption.selected = true;
  defaultOption.disabled = true;
  selectElement.add(defaultOption);

  for (var i = 0; i < optionsArray.length; i++) {
    var option = document.createElement("option");
    option.value = optionsArray[i];
    option.text = optionsArray[i];
    selectElement.add(option);
  }
}

function handleCenterMail() {
  var selectedCenterElement = document.getElementById("center");
  var selectedCenter = selectedCenterElement.value;

  var existingHiddenInput = document.querySelector('input[name="centerMail"]');
  var existingCCEmailHiddenInput = document.querySelector(
    'input[name="centerCCEMail"]'
  );
  var existingHMIDHiddenInput = document.querySelector(
    'input[name="tbl_hm_id"]'
  );

  if (!existingHiddenInput) {
    var hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "centerMail";
    hiddenInput.id = "centerMail";
    selectedCenterElement.parentNode.insertBefore(
      hiddenInput,
      selectedCenterElement.nextSibling
    );
  } else {
    var hiddenInput = existingHiddenInput;
  }

  if (!existingCCEmailHiddenInput) {
    var hiddenCCEmailInput = document.createElement("input");
    hiddenCCEmailInput.type = "hidden";
    hiddenCCEmailInput.name = "centerCCEMail";
    hiddenCCEmailInput.id = "centerCCEMail";
    selectedCenterElement.parentNode.insertBefore(
      hiddenCCEmailInput,
      selectedCenterElement.nextSibling
    );
  } else {
    var hiddenCCEmailInput = existingCCEmailHiddenInput;
  }

  if (!existingHMIDHiddenInput) {
    var hiddenHMIDInput = document.createElement("input");
    hiddenHMIDInput.type = "hidden";
    hiddenHMIDInput.name = "tbl_hm_id";
    hiddenHMIDInput.id = "HMIDInput";
    selectedCenterElement.parentNode.insertBefore(
      hiddenHMIDInput,
      selectedCenterElement.nextSibling
    );
  } else {
    var hiddenHMIDInput = existingHMIDHiddenInput;
  }

  $("#custom-loader-container").show();
  $.ajax({
    url: "https://saaol.com/form-logic/center-email.php",
    // url: "./form-logic/center-email.php",
    type: "GET",
    data: {
      selectedCenter: selectedCenter,
    },
    dataType: "json",
    success: function (data) {
      centerEmail = data.center_email;
      centerCCEmail = data.cc_email;
      centerhmId = data.tbl_hm_id;

      hiddenInput.value = centerEmail;
      hiddenCCEmailInput.value = centerCCEmail;
      hiddenHMIDInput.value = centerhmId;
      $("#custom-loader-container").hide();
    },
    error: function (error) {
      $("#custom-loader-container").hide();
      alert(error);
    },
  });
}

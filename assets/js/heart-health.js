document.addEventListener("DOMContentLoaded", function () {
  // Initial tab to display
  openAwardsTab("awards-tab1");
});

function openAwardsTab(tabName) {
  var i, tabContent;

  // Reset all buttons to default styles
  var buttons = document.getElementsByClassName("awards-tab-button");
  for (i = 0; i < buttons.length; i++) {
    buttons[i].style.backgroundColor = "#fff";
  }

  // Highlight the clicked button
  var clickedButton = document.querySelector(
    "[onclick=\"openAwardsTab('" + tabName + "')\"]"
  );
  clickedButton.style.backgroundColor = "#1e95c3";

  // Hide all tab content
  tabContent = document.getElementsByClassName("awards-tab-content");
  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }

  // Show the selected tab content
  document.getElementById(tabName).style.display = "block";
}

function showContent(tabId) {
  // Hide all tab contents
  const contents = document.querySelectorAll(".bimal-sir-tab-content");
  contents.forEach((content) => {
    content.classList.remove("active");
  });

  // Remove active class from all buttons
  const buttons = document.querySelectorAll(".bimal-sir-tab-button");
  buttons.forEach((button) => {
    button.classList.remove("active");
  });

  // Show the selected tab content
  const activeContent = document.getElementById(tabId);
  if (activeContent) {
    activeContent.classList.add("active");
  }

  // Add active class to the clicked button
  event.target.classList.add("active");
}

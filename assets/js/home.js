// Select the image element
let home_slider_image = document.getElementById("home_slider_image");

// Array of image URLs
var imgNamesArray = [
  "https://saaol.com/psd/assets/images/psd/Bimal-sir-img.png",
  "https://saaol.com/psd/assets/images/psd/Bimal-sir-with patients.png",
  "https://saaol.com/psd/assets/images/psd/4image-collage-for-header.png",
];

// Initialize a counter to keep track of the current image index
let currentIndex = 0;

// Function to change the image source
function changeImage() {
  // Set the image source to the current image in the array
  home_slider_image.src = imgNamesArray[currentIndex];

  // Increment the index, and wrap around if it goes past the end of the array
  currentIndex = (currentIndex + 1) % imgNamesArray.length;
}

// Call changeImage function every 2 seconds
setInterval(changeImage, 3000);

document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".review-slider-first");
  const prevBtn = document.getElementById("prev");
  const nextBtn = document.getElementById("next");
  const countDisplay = document.querySelector(".count");
  let currentSlide = 0;

  // This function shows only the current slide and hides the rest
  function showSlide(index) {
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; // Hide all slides
    }
    slides[index].style.display = "block"; // Show the current slide
    countDisplay.textContent = index + 1 + " of " + slides.length; // Update the slide counter
  }

  // Move to the next slide when "Next" is clicked
  nextBtn.addEventListener("click", function () {
    currentSlide = (currentSlide + 1) % slides.length; // Go to the next slide
    showSlide(currentSlide); // Show the new slide
  });

  // Move to the previous slide when "Previous" is clicked
  prevBtn.addEventListener("click", function () {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length; // Go to the previous slide
    showSlide(currentSlide); // Show the new slide
  });

  showSlide(currentSlide); // Show the first slide when the page loads
});

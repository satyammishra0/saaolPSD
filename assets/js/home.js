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

// function googleTranslateElementInit() {
//   new google.translate.TranslateElement(
//     {
//       pageLanguage: "en",
//       includedLanguages: "en,hi",
//       layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
//     },
//     "google_translate_element"
//   );
// }

// function triggerGoogleTranslate(lang) {
//   const translateSelect = document.querySelector(".goog-te-combo");
//   if (translateSelect) {
//     translateSelect.value = lang;
//     translateSelect.dispatchEvent(new Event("change"));
//   }
// }

// function loadGoogleTranslate() {
//   const script = document.createElement("script");
//   script.type = "text/javascript";
//   script.src =
//     "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
//   script.onload = () => {
//     googleTranslateElementInit();
//     document.getElementById("language").addEventListener("change", () => {
//       let lang = document.getElementById("language").value;
//       triggerGoogleTranslate(lang);
//     });
//   };
//   document.body.appendChild(script);
// }

// document.addEventListener("DOMContentLoaded", () => {
//   loadGoogleTranslate();
// });

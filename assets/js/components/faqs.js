document.querySelectorAll(".faq-question").forEach((item) => {
  item.addEventListener("click", () => {
    const parent = item.parentElement;
    const answer = parent.querySelector(".faq-answer");

    parent.classList.toggle("active");

    if (parent.classList.contains("active")) {
      answer.style.maxHeight = "max-content";
      answer.style.paddingTop = "10px";
      answer.style.paddingBottom = "10px";
    } else {
      answer.style.maxHeight = "0";
      answer.style.paddingTop = "0";
      answer.style.paddingBottom = "0";
    }
  });
});

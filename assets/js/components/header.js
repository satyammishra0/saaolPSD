function toggleNavbarfn() {
  var x = document.getElementById("navbar");
  if (x.classList.contains("show")) {
    x.classList.remove("show");
  } else {
    x.classList.add("show");
  }
}

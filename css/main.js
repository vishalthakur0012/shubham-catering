window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".top-navbar");
  var logo = document.querySelector(".logo");
  var darkLogo = document.querySelector(".dark-logo");

  if (window.scrollY > 0) {
    navbar.classList.add("sticky");
    logo.style.display = "none";
    darkLogo.style.display = "block";
  } else {
    navbar.classList.remove("sticky");
    logo.style.display = "block";
    darkLogo.style.display = "none";
  }
});

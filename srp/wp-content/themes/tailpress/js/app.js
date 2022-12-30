(() => {
  // resources/js/app.js
  var nav = document.querySelector("#navbar");
  if (window.scrollY >= 0) {
    nav.classList.add("gradient_blue");
    navbar.classList.add("scrolled");
  }
  window.addEventListener("scroll", function(event) {
    event.preventDefault();
    if (window.scrollY <= 0) {
      nav.style.backgroundColor = "transparent";
      navbar.classList.remove("scrolled");
      nav.classList.remove("gradient_blue");
    } else {
      nav.classList.add("gradient_blue");
      navbar.classList.add("fixed");
      navbar.classList.add("scrolled");
    }
  });
  window.addEventListener("scroll", function() {
    var items = document.getElementsByClassName("list-block");
    var navItems = document.getElementsByClassName("content-menu-item");
    var upItems = [];
    for (var i = 0; i < items.length; i++) {
      if (items[i].getBoundingClientRect().y < 200) {
        upItems.push(items[i].id);
        if (navItems[i].dataset.anchor == upItems[upItems.length - 1]) {
          for (var n = 0; n < navItems.length; n++) {
            navItems[n].classList.remove("active");
          }
          navItems[i].classList.add("active");
        }
      }
    }
  });
  var hamburger = document.querySelector(".hamburger");
  var menu = document.querySelector("#menu");
  var bod = document.querySelector(".container");
  hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("isactive");
    menu.classList.toggle("active");
  });
})();

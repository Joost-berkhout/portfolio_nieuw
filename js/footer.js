window.addEventListener("scroll", function() {
  var footer = document.querySelector("footer");
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  var windowHeight = window.innerHeight;
  var documentHeight = Math.max(
    document.body.scrollHeight,
    document.body.offsetHeight,
    document.documentElement.clientHeight,
    document.documentElement.scrollHeight,
    document.documentElement.offsetHeight
  );

  if (scrollPosition + windowHeight >= documentHeight) {
    footer.classList.add("footer-visible");
  } else {
    footer.classList.remove("footer-visible");
  }
});
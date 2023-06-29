
window.addEventListener('load', function() {
  adjustContentMargin();
});

window.addEventListener('resize', function() {
  adjustContentMargin();
});

function adjustContentMargin() {
  var navbarHeight = document.querySelector('.navbar').offsetHeight;
  document.querySelector('.content').style.marginTop = navbarHeight + 'px';
}

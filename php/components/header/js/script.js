//make navbar margin so there cant content in the navbar
window.addEventListener('load', function() {
  adjustContentMargin();
});
//make navbar margin so there cant content in the navbar
window.addEventListener('resize', function() {
  adjustContentMargin();
});

//make footer stay under the page
function adjustContentMargin() {
  var navbarHeight = document.querySelector('.navbar').offsetHeight;
  document.querySelector('.content').style.marginTop = navbarHeight + 'px';
}

//header
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

//footer under page
window.addEventListener('load', function() {
    adjustContentMargin();
  });
  
  window.addEventListener('resize', function() {
    adjustContentMargin();
  });
  
  function adjustContentMargin() {
    var navbarHeight = document.querySelector('.navbar').offsetHeight;
    var footerHeight = document.querySelector('.footer').offsetHeight;
    var contentElement = document.querySelector('.content');
    var windowHeight = window.innerHeight;
  
    // Calculate the available height for the content
    var availableHeight = windowHeight - navbarHeight - footerHeight;
  
    // Adjust the margin and height of the content
    contentElement.style.marginTop = navbarHeight + 'px';
    contentElement.style.marginBottom = footerHeight + 'px';
    contentElement.style.minHeight = availableHeight + 'px';
  }

//contact
    // Check if the URL contains a success message parameter
    const urlParams = new URLSearchParams(window.location.search);
    const successMessage = urlParams.get('success');
    
    // Display the pop-up message if the parameter is present
    if (successMessage) {
        alert(successMessage);
    }
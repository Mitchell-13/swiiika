function menuOnClick() {
  document.getElementById("menu-bar").classList.toggle("change");
  document.getElementById("nav").classList.toggle("change");
  document.getElementById("menu-bg").classList.toggle("change-bg");
}

/*
function removeClassOnResize() {
  var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var influencer = document.getElementById('influencers')
  if (windowWidth <= 760) {
    influencer.classList.remove('from-right', 'btn');
  } else {
    influencer.classList.add('from-right', 'btn');
  }
}
// Call the function on window resize
window.addEventListener('resize', removeClassOnResize);

// Call the function on page load
window.addEventListener('load', removeClassOnResize);

*/

window.addEventListener('scroll', function () {
  var stickyDiv = document.getElementById('logo');
  var offset = window.innerHeight * 0.6;

  if (window.scrollY > offset) {
    stickyDiv.classList.remove('visible');
  } else {
    stickyDiv.classList.add('visible');
  }
});
/*
docume nt.addEventListener("DOMContentLoaded", function () {
  // Get the businesses and influencers div elements by their IDs
  const businessesDiv = document.getElementById("businesses");
  const influencersDiv = document.getElementById("influencers");

  // Define a function to toggle the"selected" class on a given element
  function toggleSelectedClass(element) {
    element.classList.toggle("selected");
  }

  Add a click event listener to the businesses div
  businessesDiv.addEventListener("click", function() {
    if (!businessesDiv.classList.contains("selected")) {
      toggleSelectedClass(businessesDiv);
      toggleSelectedClass(influencersDiv);
    }
  });

  // Add a click event listener to the influencers div
  influencersDiv.addEventListener("click", function () {
    if (!influencersDiv.classList.contains("selected")) {
      toggleSelectedClass(influencersDiv);
      toggleSelectedClass(businessesDiv);
    }
  });
});
*/

function clearForm() {
  document.getElementById("name-input").value = "";
  document.getElementById("email").value = "";
  document.getElementById("message").value = "";
}




document.addEventListener('DOMContentLoaded', function () {
  var hiddenDiv = document.querySelector('.scroll-hidden');
  window.addEventListener('scroll', function () {
    var scrollPosition = window.pageYOffset;
    if (scrollPosition > 0 && !hiddenDiv.classList.contains('scroll-visible')) {
      hiddenDiv.classList.add('scroll-visible'); // Show the hidden div
    }
  });
});


window.addEventListener('load', function () {
  var myDiv = document.getElementById('container1');
  myDiv.style.opacity = "1";
  setTimeout(() => {
    myDiv.classList.add('bg-fade-out');
  }, 1000);
});


window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

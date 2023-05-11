function menuOnClick() {
    document.getElementById("menu-bar").classList.toggle("change");
    document.getElementById("nav").classList.toggle("change");
    document.getElementById("menu-bg").classList.toggle("change-bg");
  }


  function removeClassOnResize() {
    var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var business = document.getElementById('businesses');
    var influencer = document.getElementById('influencers')
    if (windowWidth < 760) {
      business.classList.remove('from-left', 'btn');
      influencer.classList.remove('from-right', 'btn');
    } else {
      business.classList.add('from-left','btn');
      influencer.classList.add('from-right','btn');
    }
  }
  
  // Call the function on window resize
  window.addEventListener('resize', removeClassOnResize);
  
  // Call the function on page load
  window.addEventListener('load', removeClassOnResize);
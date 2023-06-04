let activeIndex = 0;

const groups = document.getElementsByClassName("port-section");

const handleRightClick = () => {
  const nextIndex = activeIndex + 1 <= groups.length - 1 ? activeIndex + 1 : 0;

  const currentGroup = document.querySelector(`[data-index="${activeIndex}"]`),
    nextGroup = document.querySelector(`[data-index="${nextIndex}"]`);

  currentGroup.dataset.status = "after";

  nextGroup.dataset.status = "becoming-active-from-before";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndex = nextIndex;
  });
}

const handleLeftClick = () => {
  const nextIndex = activeIndex - 1 >= 0 ? activeIndex - 1 : groups.length - 1;

  const currentGroup = document.querySelector(`[data-index="${activeIndex}"]`),
    nextGroup = document.querySelector(`[data-index="${nextIndex}"]`);

  currentGroup.dataset.status = "before";

  nextGroup.dataset.status = "becoming-active-from-after";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndex = nextIndex;
  });
}

document.getElementById('influencers').addEventListener('click', function () {
  var div1 = document.getElementById('influencer-content');
  var div2 = document.getElementById('business-content');

  div2.classList.add('portfolio-hidden');
  setTimeout(function () {
    div2.style.display = "none"
  }, 500);
  div1.style.display = "block"
  setTimeout(function () {
    div1.classList.remove('portfolio-hidden');
  }, 500);
});
document.getElementById('businesses').addEventListener('click', function () {
  var div2 = document.getElementById('influencer-content');
  var div1 = document.getElementById('business-content');

  div2.classList.add('portfolio-hidden');
  setTimeout(function () {
    div2.style.display = "none"
  }, 500);
  div1.style.display = "block"
  setTimeout(function () {
    div1.classList.remove('portfolio-hidden');
  }, 500);

});

$(document).ready(function () {
  var btn = $(".play-button");
  btn.click(function () {
    btn.toggleClass("paused");
    return false;
  });
});


function playPause(video) {
  var myVideo = document.getElementById(video);
  if (myVideo.paused)
    myVideo.play(),
      myVideo.style.opacity = '100%';
  else
    myVideo.pause(),
      myVideo.style.opacity = '50%';
}




var triggerElement = document.getElementById('shorts-container');
var hiddenElements = document.getElementsByClassName('showhide');

triggerElement.addEventListener('mouseenter', function () {
  for (var i = 0; i < hiddenElements.length; i++) {
    var hiddenElement = hiddenElements[i];
    hiddenElement.style.opacity = '90%';
  }
});

triggerElement.addEventListener('mouseleave', function () {
  for (var i = 0; i < hiddenElements.length; i++) {
    var hiddenElement = hiddenElements[i];
    hiddenElement.style.opacity = '0%';
  }
});
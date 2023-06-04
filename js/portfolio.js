let activeIndexLR = 0;

const groupsLR = document.getElementsByClassName("port-section");

const handleLeftClick = () => {
  const nextIndex = activeIndexLR + 1 <= groupsLR.length - 1 ? activeIndexLR + 1 : 0;

  const currentGroup = document.querySelector(`[data-index="${activeIndexLR}"]`),
    nextGroup = document.querySelector(`[data-index="${nextIndex}"]`);

  currentGroup.dataset.status = "after";

  nextGroup.dataset.status = "becoming-active-from-before";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndexLR = nextIndex;
  });
}

const handleRightClick = () => {
  const nextIndex = activeIndexLR - 1 >= 0 ? activeIndexLR - 1 : groupsLR.length - 1;

  const currentGroup = document.querySelector(`[data-index="${activeIndexLR}"]`),
    nextGroup = document.querySelector(`[data-index="${nextIndex}"]`);

  currentGroup.dataset.status = "before";

  nextGroup.dataset.status = "becoming-active-from-after";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndexLR = nextIndex;
  });
}

let activeIndexUD = 0;
const groupsUD = document.getElementsByClassName("scroll-video");
const handleDownClick = () => {
  const nextIndex = activeIndexUD + 1 <= groupsUD.length - 1 ? activeIndexUD + 1 : 0;
  const currentGroup = document.querySelector(`[UD-data-index="${activeIndexUD}"]`),
    nextGroup = document.querySelector(`[UD-data-index="${nextIndex}"]`);
  activateDot(nextIndex);
  pause(`filian${activeIndexUD}`);

  currentGroup.dataset.status = "below";
  nextGroup.dataset.status = "becoming-active-from-above";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndexUD = nextIndex;
  });
}

const handleUpClick = () => {
  const nextIndex = activeIndexUD - 1 >= 0 ? activeIndexUD - 1 : groupsUD.length - 1;

  const currentGroup = document.querySelector(`[UD-data-index="${activeIndexUD}"]`),
    nextGroup = document.querySelector(`[UD-data-index="${nextIndex}"]`);

  activateDot(nextIndex);
  pause(`filian${activeIndexUD}`);
  currentGroup.dataset.status = "above";

  nextGroup.dataset.status = "becoming-active-from-below";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndexUD = nextIndex;
  });
}

function activateDot(index) {
  var dots = document.getElementsByClassName('dot');

  // Remove dot-active class from all dots
  for (var i = 0; i < dots.length; i++) {
    dots[i].classList.remove('dot-active');
  }
  // Add dot-active class to the dot with the specified index
  dots[index].classList.add('dot-active');
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

function pause(video) {
  var myVideo = document.getElementById(video);
  var btn = $(".play-button")
  if (!myVideo.paused)
    myVideo.pause(),
      myVideo.style.opacity = '50%',
      btn.toggleClass("paused");
}
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
// Left and right buttons on influencer portfolio section

let activeIndexLR = 0;

const groupsLR = document.getElementsByClassName("port-section");

const handleLeftClick = () => {
  const nextIndex = activeIndexLR - 1 >= 0 ? activeIndexLR - 1 : groupsLR.length - 1;

  const currentGroup = document.querySelector(`[data-index="${activeIndexLR}"]`),
    nextGroup = document.querySelector(`[data-index="${nextIndex}"]`);

  currentGroup.dataset.status = "after";

  pauseAllVideos();
  nextGroup.dataset.status = "becoming-active-from-before";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndexLR = nextIndex;
  }, 50);
}

const handleRightClick = () => {
  const nextIndex = activeIndexLR + 1 <= groupsLR.length - 1 ? activeIndexLR + 1 : 0;

  const currentGroup = document.querySelector(`[data-index="${activeIndexLR}"]`),
    nextGroup = document.querySelector(`[data-index="${nextIndex}"]`);

  currentGroup.dataset.status = "before";

  pauseAllVideos();
  nextGroup.dataset.status = "becoming-active-from-after";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndexLR = nextIndex;
  }, 50);
}


//pause and play the video

$(document).ready(function () {
  var btn = $(".play-button");
  btn.click(function () {
    btn.toggleClass("paused");
    return false;
  });
});

function pause(video) {
  var myVideo = document.getElementById(video);
  var btn = $(".play-button");
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
function pauseAllVideos() {
  var videos = document.querySelectorAll('.shorts');
  var btn = $(".play-button");
  // Loop through each video element and pause it
  for (var i = 0; i < videos.length; i++) {
    var video = videos[i];
    if (!video.paused)
      video.pause(),
        video.style.opacity = '50%',
        btn.toggleClass("paused");
  }
}

//show and hide the elements when hovering video

var triggerElements = document.querySelectorAll('.vid-views');
var hiddenElements = document.getElementsByClassName('showhide');

// Attach event listeners to each trigger element
for (var i = 0; i < triggerElements.length; i++) {
  var triggerElement = triggerElements[i];
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
}

const goToIndex = (index) => {
  const nextIndex = document.querySelector(`[data-index="${index}"]`),
    currentIndex = document.querySelector(`[data-index="${activeIndexLR}"]`);
  pauseAllVideos();
  currentIndex.dataset.status = "before";
  nextIndex.dataset.status = "becoming-active-from-after";

  setTimeout(() => {
    nextIndex.dataset.status = "active";
    activeIndexLR = index;
  }, 50);
}
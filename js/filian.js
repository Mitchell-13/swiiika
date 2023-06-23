// Up and Down buttons on shorts videos

let activeIndexUD = 0;
const groupsUD = document.getElementsByClassName("filian-vids");
const handleDownClick = () => {
  const nextIndex = activeIndexUD + 1 <= groupsUD.length - 1 ? activeIndexUD + 1 : 0;
  const currentGroup = document.querySelector(`[UD-data-index="${activeIndexUD}"]`),
    nextGroup = document.querySelector(`[UD-data-index="${nextIndex}"]`);
  activateDot(nextIndex);
  pauseAllVideos();

  currentGroup.dataset.status = "below";
  nextGroup.dataset.status = "becoming-active-from-above";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndexUD = nextIndex;
    const description = nextGroup.getAttribute('data-views');
    document.getElementById('view-count').textContent = description;
  }, 50);
}

const handleUpClick = () => {
  const nextIndex = activeIndexUD - 1 >= 0 ? activeIndexUD - 1 : groupsUD.length - 1;

  const currentGroup = document.querySelector(`[UD-data-index="${activeIndexUD}"]`),
    nextGroup = document.querySelector(`[UD-data-index="${nextIndex}"]`);

  activateDot(nextIndex);
  pauseAllVideos();
  currentGroup.dataset.status = "above";

  nextGroup.dataset.status = "becoming-active-from-below";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndexUD = nextIndex;
    const description = nextGroup.getAttribute('data-views');
    document.getElementById('view-count').textContent = description;
  }, 50);
}

//change dots for active video

function activateDot(index) {
  var dots = document.getElementsByClassName('dot');

  // Remove dot-active class from all dots
  for (var i = 0; i < dots.length; i++) {
    dots[i].classList.remove('dot-active');
  }
  // Add dot-active class to the dot with the specified index
  dots[index].classList.add('dot-active');
}

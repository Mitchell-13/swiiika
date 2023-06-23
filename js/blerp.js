// Up and Down buttons on shorts videos

let bactiveIndexUD = 0;
const bgroupsUD = document.getElementsByClassName("blerp-vids");
const bhandleDownClick = () => {
  const nextIndex = bactiveIndexUD + 1 <= bgroupsUD.length - 1 ? bactiveIndexUD + 1 : 0;
  const currentGroup = document.querySelector(`[bUD-data-index="${bactiveIndexUD}"]`),
    nextGroup = document.querySelector(`[bUD-data-index="${nextIndex}"]`);
  bactivateDot(nextIndex);
  pauseAllVideos();

  currentGroup.dataset.status = "below";
  nextGroup.dataset.status = "becoming-active-from-above";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    bactiveIndexUD = nextIndex;
    const description = nextGroup.getAttribute('data-views');
    document.getElementById('view-count').textContent = description;
  }, 50);
}

const bhandleUpClick = () => {
  const nextIndex = bactiveIndexUD - 1 >= 0 ? bactiveIndexUD - 1 : bgroupsUD.length - 1;

  const currentGroup = document.querySelector(`[bUD-data-index="${bactiveIndexUD}"]`),
    nextGroup = document.querySelector(`[bUD-data-index="${nextIndex}"]`);

  bactivateDot(nextIndex);
  pauseAllVideos();
  currentGroup.dataset.status = "above";

  nextGroup.dataset.status = "becoming-active-from-below";

  setTimeout(() => {
    nextGroup.dataset.status = "active";
    bactiveIndexUD = nextIndex;
    const description = nextGroup.getAttribute('data-views');
    document.getElementById('view-count').textContent = description;
  }, 50);
}

//change dots for active video

function bactivateDot(index) {
  var dots = document.getElementsByClassName('bdot');

  // Remove dot-active class from all dots
  for (var i = 0; i < dots.length; i++) {
    dots[i].classList.remove('dot-active');
  }
  // Add dot-active class to the dot with the specified index
  dots[index].classList.add('dot-active');
}

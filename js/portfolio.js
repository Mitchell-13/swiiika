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

document.getElementById('influencers').addEventListener('click', function() {
  var div1 = document.getElementById('influencer-content');
  var div2 = document.getElementById('business-content');

  div2.classList.add('portfolio-hidden');
  setTimeout(function() {
  div1.classList.remove('portfolio-hidden');
}, 500);
});
document.getElementById('businesses').addEventListener('click', function() {
  var div2 = document.getElementById('influencer-content');
  var div1 = document.getElementById('business-content');

  div2.classList.add('portfolio-hidden');
  setTimeout(function() {
  div1.classList.remove('portfolio-hidden');
}, 500);
});

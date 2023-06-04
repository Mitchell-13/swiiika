function getElementHeightWithMargin(element) {
  var computedStyle = window.getComputedStyle(element);
  var height = element.offsetHeight;
  var marginTop = parseFloat(computedStyle.marginTop);
  var marginBottom = parseFloat(computedStyle.marginBottom);

  var totalHeight = height + marginTop + marginBottom;

  return totalHeight;
}


function resizeElementHeight() {
  var element = document.getElementById("clients");

  var box = document.querySelector(".team");
  var height = getElementHeightWithMargin(box) + 30;

  // Adjust the height of the element
  element.style.height = height + "px";
}

// Call the function when the document loads
window.onload = resizeElementHeight;

// Call the function when the window is resized
window.onresize = resizeElementHeight;


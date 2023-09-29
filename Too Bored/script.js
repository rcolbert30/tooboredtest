// script.js

/*window.addEventListener('DOMContentLoaded', () => {
    const mainBox = document.querySelector('.main-box');
    const smallBoxes = mainBox.querySelectorAll('.small-box');
    const totalSmallBoxes = smallBoxes.length;
    
    const smallBoxSize = 300; // Set the size of the small boxes
    const gapSize = 10; // Set the gap size between small boxes
    const mainBoxWidth = (smallBoxSize + gapSize) * totalSmallBoxes;
    mainBox.style.setProperty('--main-box-width', `${mainBoxWidth}px`);
});*/








// Sticky menu bar on scroll
window.addEventListener('scroll', function () {
  const menuBar = document.getElementById('menuBar');
  if (window.scrollY > 0) {
    menuBar.classList.add('sticky');
  } else {
    menuBar.classList.remove('sticky');
  }
});

// Add 'ready' class to trans images once the page is loaded
window.addEventListener('load', () => {
  const transImages = document.querySelectorAll('.trans');
  transImages.forEach(image => {
    image.classList.add('ready');
  });
});






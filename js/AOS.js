document.addEventListener('DOMContentLoaded', function () {
  AOS.init({
    duration: 650, // 1 second fade duration
    once: true,     // animations happen only once
    offset: 60,    // start animation slightly before in view
    easing: 'ease-in-out'
  });
});

(function(){

  const professionalsSlider = tns({
    container: '.professionals__slider',
    items: 1,
    center: true,
    loop: true,
    speed: 1000,
    controls: true,
    prevButton: '#professionals__prev',
    nextButton: '#professionals__next',
    nav: false,
    navPosition: 'bottom',
    startIndex: 4,
    autoplay: false,
    swipeAngle: false,
    responsive: {
      576: {
        items: 1
      },
      768: {
        items: 3
      },
      992: {
        items: 5
      },
      1200: {
        items: 7
      },
    }
  })

})();
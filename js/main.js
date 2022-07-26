$( document ).ready(function() {
    
    
    // Use the conventional $ prefix for variables that hold jQuery objects.
    var $slider;
    
    // If the only purpose of the windowWidth() function is to set the slide variables,
    // it can be renamed and rewritten to supply the full configuration object instead.
    function buildSliderConfiguration() {
      // When possible, you should cache calls to jQuery functions to improve performance.
      var windowWidth = $(window).width();
      var numberOfVisibleSlides;
      var theTouchEnabled = false;
    
      if (windowWidth < 576) {
        numberOfVisibleSlides = 1;
        theTouchEnabled = true;
      }
      else if (windowWidth < 768) {
        numberOfVisibleSlides = 2;
        theTouchEnabled = true;

      }
      else if (windowWidth < 992) {
        numberOfVisibleSlides = 5;
      }
      else {
        numberOfVisibleSlides = 5;
      }
    
      return {
        pager: false,
        controls: true,
        infiniteLoop:false,
        hideControlOnEnd:true,
        // auto: true,
        touchEnabled: theTouchEnabled,
        slideWidth: 5000,
        startSlide: 0,
        nextText: ' ',
        prevText: ' ',
        adaptiveHeight: true,
        moveSlides: 1,
        slideMargin: 20,
        minSlides: numberOfVisibleSlides,
        maxSlides: numberOfVisibleSlides
      };
    }
    
  
    // This function can be called either to initialize the slider for the first time
    // or to reload the slider when its size changes.
    function configureSlider() {
      var config = buildSliderConfiguration();
    
      if ($slider && $slider.reloadSlider) {
        // If the slider has already been initialized, reload it.
        $slider.reloadSlider(config);
      }
      else {
        // Otherwise, initialize the slider.
        $slider = $('.slider').bxSlider(config);
      }
    }
    
    $('.slider-prev').click(function () {
      var current = $slider.getCurrentSlide();
      $slider.goToPrevSlide(current) - 1;
    });
    $('.slider-next').click(function () {
      var current = $slider.getCurrentSlide();
      $slider.goToNextSlide(current) + 1;
    });
    
    // Configure the slider every time its size changes.
    $(window).on("orientationchange resize", configureSlider);
    // Configure the slider once on page load.
    configureSlider();
    
});



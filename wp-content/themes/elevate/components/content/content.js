;(function ($) {

    $(document).on('ready', function(){
        carouselSlider();
    });
  
    //functions
    function carouselSlider(){
        $('.carousel-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            nextArrow: '<div class="chevron right-chevron"><img src="/wp-content/themes/elevate/assets/images/icons/chevron-right-white.svg" alt="right arrow"></div>',
            prevArrow: '<div class="chevron left-chevron"><img src="/wp-content/themes/elevate/assets/images/icons/chevron-left-white.svg" alt="left arrow"></div>',
            autoplay: false,
            autoplaySpeed: 5000,
            speed : 1000,
            pauseOnFocus: true
        });
        $('.carousel-slider').show();
    }
  
  })(jQuery);
  
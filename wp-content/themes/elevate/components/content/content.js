;(function ($) {

    $(document).on('ready', function(){
        carouselSlider();
        featuredPosts();
    });
  
    //functions
    function featuredPosts(){
        $('.feat-posts-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            nextArrow: '<div class="arrow right-arrow"><img src="/wp-content/themes/elevate/assets/images/icons/slider-arrow.svg" alt="right arrow"></div>',
            prevArrow: '<div class="arrow left-arrow"><img src="/wp-content/themes/elevate/assets/images/icons/slider-arrow.svg" alt="left arrow"></div>',
            autoplay: false,
            autoplaySpeed: 5000,
            speed : 1000,
            pauseOnFocus: true,
            variableWidth: true,
            appendArrows: '#slider-nav'
        });
        $('.feat-posts-slider').show();

        $('.feat-posts-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
            console.log(currentSlide + 1);
            var num = currentSlide + 1;
            if (num < 10) {
                var slide_num = '0'+num;
            } else {
                var slide_num = num;
            }
            $('#current-slide-count').text(slide_num);
        });
    }

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
  
;(function ($) {

    $(document).on('ready', function(){
        carouselSlider();
        featuredPosts();
        formToolTips();
    });
  
    //functions
    function formToolTips(){
        var tt = $('.gfield.tooltip-description > .gfield_description').outerHeight() + 15;
        console.log(tt);
        if ( $( window ).width() < 992 ) {
            var calc = '-' + (tt + 5) + 'px';
        } else {
            var calc = '-' + (tt ) + 'px';
        }
        console.log(calc);
        $('.gfield.tooltip-description > .gfield_description').css('top', calc);

        if ( $( window ).width() < 992 ) {
            $('.gfield.tooltip-description > .gfield_label').on('click', function(){
                $('.gfield.tooltip-description > .gfield_description').toggleClass('reveal');
            });
        } else {
            $('.gfield.tooltip-description > .gfield_label').mouseenter(function(){
                $('.gfield.tooltip-description > .gfield_description').addClass('reveal');
            });
            $('.gfield.tooltip-description > .gfield_label').mouseleave(function(){
                $('.gfield.tooltip-description > .gfield_description').removeClass('reveal');
            });
        }
    }

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
  
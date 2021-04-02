;(function ($) {

	$(document).on('ready',function(){
    
        if ($('.rellax').length > 0) {
            var rellax = new Rellax('.rellax');
        }
        if ($('.d-lg-rellax').length > 0) {
            if ($(window).width() > 991) {
                var desktop_rellax = new Rellax('.d-lg-rellax');
            }
        } 

	});

    $(document).on('click', 'a', function(event) {
        var link = $.attr(this, 'href');
        if ( window.location.pathname == '/' ){
            //console.log('on homepage');
            if (link.indexOf('#') > -1){
                event.preventDefault();
                //has hash
                //console.log('has hash');
                //console.log(link.split('#')[1]);
                var hash_id = '#'+link.split('#')[1];
                //console.log(hash_id);
                $('html, body').animate({
                    scrollTop: $(''+hash_id+'').offset().top
                }, 1000);
        
                //close mobile menu if menu anchor link
                if ( $( window ).width() < 992 ) {
                    if ( $(this).parent().hasClass('menu-item') || $(this).parent().hasClass('mobile-menu')) {
                        $('#mobile-menu').toggleClass('open');
                        $('.mobile-menu').fadeToggle();                
                    }
                }    
            }
        }
    });

    // $(document).on('click', 'a[href^="#"]', function (event) {
    //     event.preventDefault();

    //     $('html, body').animate({
    //         scrollTop: $($.attr(this, 'href')).offset().top
    //     }, 1000);

    //     //close mobile menu if menu anchor link
    //     if ( $( window ).width() < 992 ) {
    //         if ( $(this).parent().hasClass('menu-item') || $(this).parent().hasClass('mobile-menu')) {
    //             $('#mobile-menu').toggleClass('open');
    //             $('.mobile-menu').fadeToggle();                
    //         }
    //     }    
    // });



	$(window).load(function(){

		// Only animate elems above the fold. Everything else animate on scroll
        $('.anim-load').addClass('anim-complete');
        
	});

    $(window).on('scroll',function() {

        $('.anim-no-load').each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
            el.addClass('anim-complete'); 
            }
        });

        if ( $( window ).width() > 991 ) {
            $('.anim-left, .anim-right').each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                el.addClass('anim-complete'); 
                }
            });
        }  
        $('.anim-up').each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
            el.addClass('anim-complete'); 
            }
        });
    });


	$(window).on('resize',function(){

	});

	$.fn.visible = function(partial) {


        var $t        = $(this),
        $w            = $(window),
        viewTop       = $w.scrollTop(),
        viewBottom    = viewTop + $w.height(),
        _top          = $t.offset().top,
        _bottom       = _top + $t.height(),
        compareTop    = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };


})(jQuery);
;(function ($) {

    $(document).on('ready', function(){
        //posts
        $('#filter-cats-select').on('change', filterPosts);

        $('#search-filter').keyup(delay(function (e) {
            var search = $(this).val();
            filterPosts();
        }, 1000));
        $('#search-filter').keypress(function (e) {
            if (e.which == 13) {
                var search = $(this).val();
                filterPosts();
                return false;
            }
        });
        //case studies
        $('#filter-tax-cats-select').on('change', filterTax);

        $('#search-tax-filter').keyup(delay(function (e) {
            var search = $(this).val();
            filterTax();
        }, 1000));
        $('#search-tax-filter').keypress(function (e) {
            if (e.which == 13) {
                var search = $(this).val();
                filterTax();
                return false;
            }
        });
    });
 
    //functions 
    function filterPosts(){
        var selected_cat = $('#filter-cats-select').val();
        var search = $('#search-filter').val();
        //console.log('cat: '+selected_cat+' search: '+search);
        $('.post-listings').html('<div class="container"><div class="row post-listings-row"><div class="col-12"><div class="py-4"><h6 class="text-black text-center">Loading...</h6></div></div></div></div>');
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            data: {
                "action": "get_posts",
                cat: selected_cat,
                search: search
            },
            success: function(response) {
                $('.featured-item').hide();
                $('.post-listings').html('');
                //console.log(response);
                if (response == '') {
                    $('.post-listings').html('<div class="container"><div class="row post-listings-row"><div class="col-12"><div class="py-4"><h6 class="text-black text-center">No results</h6></div></div></div></div>');
                } else {
                    $('.post-listings').append(response);
                }
            }   
        });
    }

    function filterTax(){
        var selected_cat = $('#filter-tax-cats-select').val();
        var search = $('#search-tax-filter').val();
        //console.log('cat: '+selected_cat+' search: '+search);
        $('.post-listings').html('<div class="container"><div class="row post-listings-row"><div class="col-12"><div class="py-4"><h6 class="text-black text-center">Loading...</h6></div></div></div></div>');
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            data: {
                "action": "get_tax",
                cat: selected_cat,
                search: search
            },
            success: function(response) {
                $('.featured-item').hide();
                $('.post-listings').html('');
                //console.log(response);
                if (response == '') {
                    $('.post-listings').html('<div class="container"><div class="row post-listings-row"><div class="col-12"><div class="py-4"><h6 class="text-black text-center">No results</h6></div></div></div></div>');
                } else {
                    $('.post-listings').append(response);
                }
            }   
        });
    }

    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                callback.apply(context, args);
            }, ms || 0);
        };
    }
  
  })(jQuery);
  
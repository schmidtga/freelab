require('./bootstrap');

(function($) {

    // DOCUMENTO
    $(document).ready(function() {

        var div = $('.text-body');


        $('.central').on('scroll', function() {

            var st = $(this).scrollTop();
            div.css({ 'opacity' : (0 + st/500) });

        });        

    });
})(jQuery);
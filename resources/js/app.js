require('./bootstrap');

(function($) {

    // DOCUMENTO
    $(document).ready(function() {

        var div = $('.text-container');


        $(window).on('scroll', function() {

            var st = $(this).scrollTop();
            div.css({ 'background' : 'rgba(255, 255, 255, ' +  (0.5 + st/1000) + ')' });

        }); 

    });
})(jQuery);
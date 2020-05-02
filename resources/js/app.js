require('./bootstrap');

(function($) {

    function setDivOpacity($div, st) {
        $div.css({ 'background' : 'rgba(255, 255, 255, ' +  (0 + st/800) + ')' });
    };

    $(document).ready(function() {

        var $div = $('.text-container');
        var st = $(this).scrollTop();

        setDivOpacity($div, st);

        $(window).on('scroll', function() {
            st = $(this).scrollTop();
            setDivOpacity($div, st);
        });

    });
    
})(jQuery);
require('./bootstrap');

(function($) {

    function setDivOpacity($div, st) {
        $div.css({ 'background' : 'rgba(255, 255, 255, ' +  (0 + st/800) + ')' });
    };

    function setArrowDirection($arrow, st) {
        if (st > 0) {
            $arrow.find('i').removeClass('fa-angle-double-up').addClass('fa-angle-double-down');
        } else {
            $arrow.find('i').removeClass('fa-angle-double-down').addClass('fa-angle-double-up');
        }
    }

    $(document).ready(function() {

        var $div = $('.text-container');
        var st = $(document).scrollTop();
        var $arrow = $('.arrow');

        setDivOpacity($div, st);

        $(window).on('scroll', function() {
            st = $(document).scrollTop();
            setDivOpacity($div, st);
            setArrowDirection($arrow, st);
        });


    });
    
})(jQuery);
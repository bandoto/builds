
jQuery("document").ready(function($) {

    var nav = $('.content');

    $(window).scroll(function() {
        if ($(this).scrollTop() > 136) {
            nav.addClass("content__scroll");
        } else {
            nav.removeClass("content__scroll");
        }
    });

});
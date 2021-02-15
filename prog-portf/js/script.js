$(document).ready(function() {

    var nav = $('.header');

    $(window).scroll(function() {
        if ($(this).scrollTop() > 136) {
            nav.addClass("header__active");
        } else {
            nav.removeClass("header__active");
        }
    });

});

var $page = $('html');
$('a[href*="#portfolio"],a[href*="#skills"],a[href*="#featured"],a[href*="#projects"],a[href*="#contact"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 70
    }, 400);
    return false;
});


$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger').toggleClass('active');
        $('body').toggleClass('lock');
        $('.menu__body').toggleClass('active');
    });
});


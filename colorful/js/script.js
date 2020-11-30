//*BURGER
$(document).ready(function() {
    $('.navbar-toggler').click(function(event) {
        $('.navbar-toggler').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

jQuery("document").ready(function($) {

    var nav = $('.header');

    $(window).scroll(function() {
        if ($(this).scrollTop() > 136) {
            nav.addClass("header__active");
        } else {
            nav.removeClass("header__active");
        }
    });

});

//*SLIDER
$(document).ready(function() {
    $('.slider__body').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: false
    });
    $('.slider-big__body').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        adaptiveHeight: false,
        variableWidth: true,
    });
});

//*BTN-PAGEUP
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
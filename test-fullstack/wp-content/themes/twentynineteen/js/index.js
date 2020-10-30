$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger,.menu__body').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

// Slide Up Slide Down
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 80;  // How many characters are shown by default
    var moretext = "Show more";
    var lesstext = "Show less";
    

    $('.item-card__subtitle').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="item-card__btn">' + moretext + '</a></span>';
 			
            $(this).html(html);
        }
 
    });
 
    $(".item-card__btn").click(function(){
        if($(this).hasClass("item-card__btn_less")) {
            $(this).removeClass("item-card__btn_less");
            $(this).html(moretext);
        } else {
            $(this).addClass("item-card__btn_less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
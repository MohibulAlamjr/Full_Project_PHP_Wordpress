$(function () {

    //sticky menu
    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();
        if (scrolling > 300) {
            $(".menu_fixed").addClass("menu_bg");
        } else {
            $(".menu_fixed").removeClass("menu_bg");
        }
        if (scrolling > 200) {
            back2top.fadeIn(500);
        } else {
            back2top.fadeOut(500);
        }
    });


    


    // smooth scroll
    //animation scroll js
    var html_body = $('html, body');
    $('.menu a').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                html_body.animate({
                    scrollTop: target.offset().top - 0
                }, 1000);
                return false;
            }
        }
    });

});
$(document).ready(function(){
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 90) {
            $('.menu').addClass('fixed-top');
        } else {
            $('.menu').removeClass('fixed-top');
        }
    });
});
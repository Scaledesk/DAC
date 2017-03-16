$(document).ready(function(){


$('#menu1 , .dropdown-menu').hover(function() {
  $('ul.nav').find('.dropdown-menu').stop(true, true).delay(200).fadeIn(10);
}, function() {
  $('ul.nav').find('.dropdown-menu').stop(true, true).delay(200).fadeOut(0);
});

    });




$(document).ready(function() {
    $(window).scroll(function() {

        var headerH = $('.slider-sec').outerHeight(true);
        console.log(headerH);
//this will calculate header's full height, with borders, margins, paddings
        var scrollVal = $(this).scrollTop();
        if ( scrollVal > headerH ) {
            $('#fb').css({'position':'fixed','top' :'95px','background-color':'#f68f8a','width':'92%'});
        } else {
            $('#fb').css({'position':'static','top':'0px','width':'50%'});
        }
    });
});

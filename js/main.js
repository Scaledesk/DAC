


    $(window).scroll(function() {

        var headerH = $('#slider-section').outerHeight();
        var potop = $('nav.navbar.navbar-default.custom-nav.navbar-fixed-top').outerHeight();
//this will calculate header's full height, with borders, margins, paddings
        var scrollVal = $(this).scrollTop();
        if ( scrollVal > headerH ) {
            $('#fb').css({'position':'fixed','top' : potop,'background-color':'#f68f8a','width':'91.4%'});
        } else {
            $('#fb').css({'position':'static','top':'0px','width':'100%'});
        }
    });

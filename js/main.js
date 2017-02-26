$(document).ready(function(){
  

$('#menu1 , .dropdown-menu').hover(function() {
  $('ul.nav').find('.dropdown-menu').stop(true, true).delay(200).fadeIn(10);
}, function() {
  $('ul.nav').find('.dropdown-menu').stop(true, true).delay(200).fadeOut(0);
});
    
    
    });

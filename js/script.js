$('.navbar a, .footer a').click(function() {
  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top
  }, 500);
  return false;
});
$(document).ready(function() {
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
    if (scrollTop >= 100) {
      $('.navbar').addClass('short-navbar');
    } else if (scrollTop < 100) {
      $('.navbar').removeClass('short-navbar');
    }
  });
});


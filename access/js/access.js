$(function() {
    $('body').fadeIn(2000);
  const sticky = $('.sticky');
  let stickyHeight = sticky.outerHeight(),
      startPos = 0;

  $(window).on('load scroll', function() {
    let value = $(this).scrollTop();
    if ( value > startPos && value > stickyHeight ) {
      sticky.css('top', '-' + stickyHeight + 'px');
    } else {
      sticky.css('top', '0');
    }
    startPos = value;
  });
});

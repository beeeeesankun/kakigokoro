$(function(){
  const bars = $('#bars'),
        cross = $('#cross'),
        modal = $('.sticky ul');
  bars.on('click',function(){
    $(this).css({opacity:'0'});
    modal.fadeIn(500).css({display:'flex'});
  });
  cross.on('click',function(){
    modal.fadeOut(500);
    bars.css({opacity:'1'});
  });
});

$(function() {
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

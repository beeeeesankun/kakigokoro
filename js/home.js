$(function(){
  $('body').fadeIn(2000);

  var fadeInOut = function ($element) {
    var $children = $element.children(),
    current = 0,
    time = 6000,
    speed = '4s';

    $children.css({ transition: speed })
    .eq(current).css({ opacity: '1' ,transform: 'scale(1.05)'});

    setInterval(function () {
      $children.eq(current).css({ opacity: '0',transform: 'scale(1.0)'});
      current = current === $children.length - 1 ? 0 : current += 1;
      $children.eq(current).css({ opacity: '1',transform: 'scale(1.05)'});
    }, time);
  };

  fadeInOut($('#cover'));
});

$(function(){
 $('#slick01').slick({
   slidesToShow: 3,
   centerMode: true,
   arrows: false,
   autoplay: true,
   autoplaySpeed: 0,
   speed: 5000,
   swipe: false,
   cssEase: 'linear',
   pauseOnFocus: false,
   pauseOnHover: false,
   pauseOnDotsHover: false,
   responsive:[
     {
      breakpoint:959,
      settings:{
        slidesToShow:2,
      }
    },
    {
      breakpoint:559,
      settings:{
        slidesToShow:1,
      }
    }
  ]
 });
  $('.slickTab').slick({
    slidesToShow:1,
    swipe: true,
    autoplay: false,
    arrows: false,
    centerMode: true,
  });
})

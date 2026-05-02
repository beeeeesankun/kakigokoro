
$(function(){
  $('body').fadeIn(1500);
  var fadeInOut = function ($element) {
       var $children = $element.children(),
           current = 0,
           time = 5000,
           speed = '3s';

       $children.css({ transition: speed })
                .eq(current).css({ opacity: '1' ,transform: 'scale(1.15)'});

       setInterval(function () {
           $children.eq(current).css({ opacity: '0',transform: 'scale(1.0)'});
           current = current === $children.length - 1 ? 0 : current += 1;
           $children.eq(current).css({ opacity: '1',transform: 'scale(1.1)'});
       }, time);
   };

   fadeInOut($('#cover'));
});

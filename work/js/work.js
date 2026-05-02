
$(window).on('load',function(){
  $('body').fadeIn(2000);

  $('.slick').slick({
    asNavFor:'.thumbnail',
    arrows: false,
    slidesToShow:1,
  });

  $('.thumbnail').slick({
    asNavFor:'.slick',
    focusOnSelect: true,
    arrows: false,
    slidesToShow:5,
    centerMode: true,
    responsive:[
      {
       breakpoint:959,
       settings:{
         slidesToShow:3,
       }
     },
     // {
     //   breakpoint:559,
     //   settings:{
     //     slidesToShow:3,
     //   }
     // }
   ]
  });
});

(function ($) {
   // Document ready
   $(document).ready(function () {
      //  Ex Slider Header
      $('.longform-ex-hd__slider').slick({
         dots: true,
         arrows: true,
         infinite: true,
         slidesToShow: 4,
         slidesToScroll: 4,
         // autoplay: true,
         autoplaySpeed: 5000,
         responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      })

      $(window).on('load resize', function () {
        // set variable height background color section royal dining
        let heightParent = $('.lf-royal-dining-pc__text-bg').height();
        let parentMobile = $('.lf-royal-dining__content-main');
        $('.lf-royal-dining-pc__text-bg').get(0).style.setProperty('--height-bg-color', heightParent + 'px');
        if($(window).width() < 576){
            $('.lf-royal-dining__content').get(0).style.setProperty('--height-mb-bg', parentMobile.height() + 'px');
        }  else {
            $('.lf-royal-dining__content').get(0).style.setProperty('--height-mb-bg', '50%');
        }
      })

   }) // End document
})(jQuery)
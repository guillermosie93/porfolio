(function ($, Drupal) {

    'use strict';
    
    Drupal.behaviors.porfolio = {
      attach: function (context, settings) {
        $('.carousel-formation').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
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
        });
        /* emparejar la altura de las card del carousel */
        let cardFormation = $('.card-formation');
        for (let i = 0; i < cardFormation.length; i++) {
          let cardWidth = $('.card-formation')[i].style.width;
          $('.card-formation').height(cardWidth);
        }

        /* cant. de dots */
        let cantDots = $('.slick-dots')[0].children;
        console.log(cantDots);
        if( cantDots.length == 1 ) {
          $('.slick-dots').addClass('d-md-none')
        }
      }
    };
  
  } (jQuery, Drupal));;

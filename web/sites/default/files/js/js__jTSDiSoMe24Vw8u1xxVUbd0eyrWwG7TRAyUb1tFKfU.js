/**
 * @file
 * porfolio behaviors.
 */
(function ($, Drupal) {

  'use strict';
  
  Drupal.behaviors.main = {
    attach: function (context, settings) {
      let cont = 0.000000001;
      $(document).on("scroll", function(){
        var desplazamientoActual = $(document).scrollTop();
        if (desplazamientoActual <= 480) {
          $('.menu-nav-site-branding').css({
            'opacity': '0'
          })
        }else{
          cont = cont + cont;
          console.log(cont);
          $('.menu-nav-site-branding').css({
            'opacity': `${ cont }` 
          })
        }
      })

      
    }
  };
  console.log('hola');

} (jQuery, Drupal));
;

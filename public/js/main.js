// Hello.
//
// This is The Scripts used for ___________ Theme
//
//
 $(document).ready(function()
  {
        new WOW().init();

       $('input[name=phone]').keypress(function(e)
       {
          let number = $(this).val();
          $("#phone_err").text('');        
          
          if(number.length == 0 && e.which!= 48)
          {
             $("#phone_err").text('Le numéro de telephone doit commencer par 0');        
              e.preventDefault();
          }
          else if(number.length>=10)
              e.preventDefault();

          else if(e.which<48 || e.which >57)
          {
              $("#phone_err").text('Le numéro de telephone doit contenir que de digits');        
              e.preventDefault();
        
          }
         
       });

      var selected_item = null;
        $('.owl-carousel .item ').click(function(){
            if(selected_item != null){
              selected_item.css('border','none');
            }
            selected_item = $(this);
            selected_item.css({'border': '5px solid #00add2', 'border-radius':'50%'});
            $('input[name=type]').val(selected_item.attr('id'));
            
            if($("#res_assurence").hasClass('alert alert-danger text-center btn-block'))
                $('#res_assurence').removeClass('alert alert-danger text-center btn-block');

        });

        $('.owl-carousel .item ').hover(function(){
           $(this).css({'border': '5px solid #fd4f00', 'border-radius':'50%'});
           $(this).addClass('animated rotateIn');
        }, function()
        {
            $(this).css('border','none');
            if(selected_item != null)
               selected_item.css({'border': '5px solid #00add2', 'border-radius':'50%'});
              $(this).removeClass('animated rotateIn');
            
        });


         $('#post-inscription').submit(function(e)
        {
          if(selected_item == null){
             $("#res_assurence").text('Veuillez choisir votre assurence!');
            $('html, body').animate({
        scrollTop: $("#res_assurence").offset().top
    }, 100);
         
             $("#res_assurence").addClass('alert alert-danger text-center btn-block');      
            e.preventDefault();
          }
        

        });
   


 });


function main() {

(function () 
{
   'use strict';
   /*====================================
    Page a Link Smooth Scrolling 
    ======================================*/
    $('a.page-scroll').click(function() 
    {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 900);
            return false;
          }
        }
      });

    /*====================================
    Menu Active Calling Scroll Spy
    ======================================*/
    $('body').scrollspy({ 
      target: '.navmenu',
      offset: 80,
    });


       $("#head-title").typed({
            strings: ["Connaissez-vous la date d'expiration<br> de votre assurance?^1000", "Vous pouvez oublier^1000", "Nous sommes là pour vous le rappeler^1000"],
            typeSpeed: 50,
            loop: true,
            contentType: 'html',
            startDelay: 100
          });

        $("#datepicker").datepicker(
          { minDate: 0,
              dateFormat: 'yy-mm-dd' 
          });
      
        $('.owl-carousel').owlCarousel({
            loop:true,
            autoplay: true,
             responsiveClass:true,
             autoplayTimeout:100,
              navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1,
                    nav: true
                },
                600:{
                    items:3,
                    nav:true
                }
            }
        });
       

    }());
}
main();
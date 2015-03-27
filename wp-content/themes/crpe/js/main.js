/*$('.img-temoin').click(function() {
   $('.img-temoin').each(function () {
	  if ($(this).hasClass('active')) {
		 $(this).removeClass('active')
	  }
   });
   $(this).addClass('active');
   var target = $(this).attr('tem-target');
   $('.temoignage').hide();
   $('.' + target).fadeIn(500);
});*/
$(document).ready(function() {

     // Nav fixed
    $(window).scroll(function(){ 
        pos = $('.top_content').first().offset().top;

        if($(window).scrollTop() > pos){
            $('.content_nav').addClass('nav_fixed');
        }else{
            $('.content_nav').removeClass('nav_fixed');
        }
    });

     // Scroll top
      $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
          $("#scroll_up").fadeIn();
        } else {
          $("#scroll_up").fadeOut();
        }
      });
      
      $(document).on("click", "#scroll_up", function(e) {
        $("html, body").animate({scrollTop: 0}), 2500;
        
        e.preventDefault();
      });

     // Compteur
    $('.counter').counterUp({
        delay: 40,
        time: 2500
    });

     // En savoir+
    $('.info').click(function () {
        $(this).children('.info_sup').slideToggle();
        $('.button').toggleClass('active');
        if ($('.button').hasClass('active')){    
            $(this).find('span').html('+');
        }else{
           $(this).find('span').html('-'); 
        }
    });
});
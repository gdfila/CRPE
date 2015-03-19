// menu fixe
$(window).on('wheel', scrolling);

function scrolling(e){
    var scroll = $(this).scrollTop();
    //console.log(scroll);
    if(scroll > 200){
        $('.nav_header').addClass('nav_header_fixed');
        $('.logo_galien_crpe').attr('src', 'http://localhost/galien_crpe/wp-content/themes/crpe/img/accueil/logo_noir.png');
    } else {
        $('.nav_header').removeClass('nav_header_fixed');
        $('.logo_galien_crpe').attr('src', 'http://localhost/galien_crpe/wp-content/themes/crpe/img/accueil/logo_galien.png');
    }
} 


$('.img-temoin').click(function() {
   $('.img-temoin').each(function () {
	  if ($(this).hasClass('active')) {
		 $(this).removeClass('active')
	  }
   });
   $(this).addClass('active');
   var target = $(this).attr('tem-target');
   $('.temoignage').hide();
   $('.' + target).fadeIn(500);
});


//compteur
$('.counter').counterUp({
    delay: 40,
    time: 2500
});



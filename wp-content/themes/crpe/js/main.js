$(document).ready(function() {
  
    $(window).scroll(function(){ 
        // Nav fixed
        pos = $('.top_content').first().offset().top;

        if($(this).scrollTop() > pos){
            $('.content_nav').addClass('nav_fixed');
        }else{
            $('.content_nav').removeClass('nav_fixed');
        }

        // Scroll top apparition
        if ($(this).scrollTop() > 200) {
            $("#scroll_up").fadeIn();
        }else{
            $("#scroll_up").fadeOut();
        }
    });
    
    // Menu au clic
    $('.menu-item-has-children').click(function() {
        if (!$(this).hasClass('open')) {
            $('.menu-item-has-children').removeClass('open');
            $('.sub-menu').slideUp();
            $(this).addClass('open');
            $(this).children('.sub-menu').slideDown();   
        }  
        else {
            $('.menu-item-has-children').removeClass('open');
            $('.sub-menu').slideUp(); 
        }
    });

    // Scroll top clic
    $('#scroll_up').click(function() {
        $("html, body").animate({scrollTop: 0}), 2500;
    });

    // En savoir+
    $('.info').click(function() {
        $(this).children('.info_sup').slideToggle();
        $('.button').toggleClass('active');
        if ($('.button').hasClass('active')){    
            $(this).find('span').html('+');
        }else{
           $(this).find('span').html('-'); 
        }
    });

    // Lire la suite
    $('.lire_suite').click(function() {
        $(this).prev('.savoir_faire_texte').css({
            'overflow': 'visible',
            'height': '100%'});
        $(this).css('display', 'none');
        $(this).next('.lire_moins').css('display', 'block');
    });

    // Lire moins
    $('.lire_moins').click(function() {
        $(this).prevAll('.savoir_faire_texte').css({
            'overflow': 'hidden',
            'height': '105px'});
        $(this).prev('.lire_suite').css('display', 'block');
        $(this).css('display', 'none');
    });

    // Compteur
    $('.counter').counterUp({
        delay: 40,
        time: 2500
    });

    // Formulaire champs chekbox caché
    $('#brochure').click(function(){
        if ($("#brochure").is(":checked") == true )
        {        
            $('#adressEnvoi').slideDown();
        }else{
            $('#adressEnvoi').slideUp();
         }        
    });
    $('#rappel').click(function(){
        if ($("#rappel").is(":checked") == true )
        {        
            $('#horaire').slideDown();
        }else{
            $('#horaire').slideUp();
         }        
    });

    // Modification Html et Css sous 1024px
    if ($(window).width() < 1024){
        $('.carousel-caption').addClass('hidden-xs');
    };

    // Modification Html et Css sous 992px
    if ($(window).width() < 992){
        $('h1').removeClass('text_shadow');
        $('h2').removeClass('text_shadow');
        $('#container_centre > div').removeClass('img_prez_aplat').removeClass('img_prez_incurve');
        $('#container_centre > div').css('height', '450px');
    };
});
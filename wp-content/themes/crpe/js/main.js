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
});
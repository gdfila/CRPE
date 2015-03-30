
/**
 * formulaire brochure
 * si  chekbox envoye par courrier est cochez on fait apparaitre les champs adresse
 */
     $('#brochure').change(function(){
         var ok=$("#brochure").is(":checked");
        if (ok== true )
       {        
            $('#adressEnvoi').addClass("adrEnvoi").removeClass("adrEnvoiHidden");
        }
       else
       {
          $('#adressEnvoi').addClass("adrEnvoiHidden").removeClass("adrEnvoi");
         }
         
    });
    
  /**
 * formulaire brochure header 
 * si  chekbox envoye par courrier est cochez on fait apparaitre les champs adresse
 */
     $('#brochureHeader').change(function(){
         var ok=$("#brochureHeader").is(":checked");
        if (ok== true )
       {        
            $('#adressEnvoiHeader').addClass("adrEnvoi").removeClass("adrEnvoiHidden");
        }
       else
       {
          $('#adressEnvoiHeader').addClass("adrEnvoiHidden").removeClass("adrEnvoi");
         }
         
    });
    /**
 * formulaire brochure
 * si  chekbox rappel  est cochez on fait apparaitre les champs plage horaire
 */
     $('#rappel').change(function(){
         var ok=$("#rappel").is(":checked");
        if (ok== true )
       {        
            $('#horaire').addClass("horaire").removeClass("horaireHidden");
        }
       else
       {
          $('#horaire').addClass("horaireHidden").removeClass("horaire");
         }
         
    });
    
    /** 
     /* formulaire brochure header 
      */
       $('#rappelHeader').change(function(){
         var ok=$("#rappelHeader").is(":checked");
        if (ok== true )
       {        
            $('#horaireHeader').addClass("horaire").removeClass("horaireHidden");
        }
       else
       {
          $('#horaireheader').addClass("horaireHidden").removeClass("horaire");
         }
         
    });
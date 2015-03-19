
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
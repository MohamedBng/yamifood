CKEDITOR.replace( 'message' );
function erreur() {

     var sujet = $('#sujet').val();
    var contenu = CKEDITOR.instances['contenu'].getData();
    var submit = $('#submithidden').val();
    
   
    
    //Je vérifie que les champs ne soit pas vide
    if (contenu == ""){ 
        event.preventDefault();
        alert("Un champ n'est pas remplie");
        stopImmediatePropagation();
    }

    if (sujet == ""){ 
        event.preventDefault();
        alert("Un champ n'est pas remplie");
        stopImmediatePropagation();
    }
    
   
     $.ajax({
       type : 'post',
       url : 'php/newsletter.php',
       
       data :{ 
              message: contenu, 
              sujet: sujet,
              sendNewsletter: submit
              

           },
});
 alert("Les mail a etait envoyer avec succes");
 formulaireMail[0].reset(); 

return false;
}
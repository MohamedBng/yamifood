function erreur() {
    var contenu = $('#contenu').val();
    var sujet = $('#sujet').val();
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
       url : '../yamifoodCopie/php/newsletterProcess.php',
       
       data :{ 
              message: contenu, 
              sujet: sujet
           },
});
 alert("Les mail a etait envoyer avec succes");
 formulaireMail[0].reset(); 

return false;
}
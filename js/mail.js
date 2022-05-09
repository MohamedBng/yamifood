function erreur() {
    var mail = $('#mail').val();
    var confirmationMail = $('#confirmationMail').val();
    var contenu = $('#contenu').val();
    var sujet = $('#sujet').val();
    var nom = $('#nom').val();
    var formulaireMail = $('#formulaireMail');
    var expressionReguliereMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
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

    if (mail == ""){ 
        event.preventDefault();
        alert("Un champ n'est pas remplie");
        stopImmediatePropagation();
    }

    if (confirmationMail == ""){ 
        event.preventDefault();
        alert("Un champ n'est pas remplie");
        stopImmediatePropagation();
    }

    if (nom == ""){ 
        event.preventDefault();
        alert("Un champ n'est pas remplie");
        stopImmediatePropagation();
    }


//Je vérifie que le mail et sa confimation soit identique
    if (mail!=confirmationMail) {
         event.preventDefault();
      alert("Le mail et la confirmation doivent etre identique");
      stopImmediatePropagation();
     }

/*Example of invalid email id

    mysite.ourearth.com [@ is not present]
    mysite@.com.my [ tld (Top Level domain) can not start with dot "." ]
    @you.me.net [ No character before @ ]
    mysite123@gmail.b [ ".b" is not a valid tld ]
    mysite@.org.org [ tld can not start with dot "." ]
    .mysite@mysite.org [ an email should not be start with "." ]
    mysite()*@gmail.com [ here the regular expression only allows character, digit, underscore, and dash ]
    mysite..1234@yahoo.com [double dots are not allowed]
*/ 

//Je vérifie que le mail soit au normes
    if (!expressionReguliereMail.test(mail)) {
         event.preventDefault();
      alert("Veuillez utilisé une adresse mail valide");
      stopImmediatePropagation(); 
     }
    
   
     $.ajax({
       type : 'post',
       url : 'php/mail.php',
       
       data :{ 
              mail: mail,
              confirmationMail: confirmationMail,
              nom:nom,
              message: contenu, 
              sujet: sujet,

           },
});
 alert("Le mail a etait envoyer avec succes");
 formulaireMail[0].reset(); 

return false;
}
<?php
$sujet= $_POST['sujet'];
$destinataire= 'mohamed.bengrich@outlook.fr';
$mail = $_POST['mail'];
$confirmationMail = $_POST['confirmationMail'];
$nom = $_POST['nom'];

$entete  = 'MIME-Version: 1.0' . "\r\n";
$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$entete .= 'From: ' . $mail . "\r\n";

$message = '<p><b>Nom : </b>' . $_POST['nom'] . '<br>
            <b>Message : </b>' . $_POST['message'] . '</p>';

function validationMail($mail, $confirmationMail){
    if (isset($mail) && isset($confirmationMail) && !empty($mail) && !empty($confirmationMail)) {
        if ($mail===$confirmationMail) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                return true;
            }
         else{
    echo"Le mail doit etre valide";
    return false;
    } 
    }
     else{
    echo"Le mail et sa confirmation doivent etre identiques e";
    return false;
    } 
    }
    else {
    echo"Le mail doit etre renseigner";
        return false;
    }          
}
  if (validationMail($mail, $confirmationMail)) {
     $maill= mail($destinataire, $sujet, $message, $entete);
  }

?>
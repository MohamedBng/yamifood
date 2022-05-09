<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//Tester une variable de session
    if(!isset($_SESSION['auth'])){
        //Message d'erreur
        $msg = "Login ou mot de passe incorrect.";
        
        //Redirection
        header('Location: pageConnexion.php');
        exit;
    }
<?php
require_once '../php/bdd.php';
$sujet= $_POST['sujet'];
$destinataire= 'mohamed.bengrich@outlook.fr';
$compteur=0;
$mail;
$message = $_POST['message'];


    if (isset($sujet) && isset($message) && !empty($sujet) && !empty($message)) {

$req = $pdo->query("SELECT mail FROM newsletter");
    while ($donnees = $req->fetch())

  {
    $compteur++;
    $mail=$donnees['mail'];
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $mail . "\r\n";

     $maill= mail($destinataire, $sujet, $message, $entete);
    }
  }
?>
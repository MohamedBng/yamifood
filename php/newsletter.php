<?php
 
require_once('autoload.php');

class Newsletter
{

public $sujet;
public $destinataire;
public $entete;
public $message;
public $maill;
public $req;
public $bdd;
public $donnees;
public $table;
public $mail;
public $sql;
public $res;
public $exec;


public function __construct(){
   $this->bdd = new Bdd;
}

public function insert(){
  $this->mail = $_POST['mail'];
  if (!empty($this->mail)) {
      $sql = "INSERT INTO newsletter (mail) VALUES (?)";
      echo $sql;
      $res = $this->bdd->getPdo()->prepare($sql);
      $exec = $res->execute(array($this->mail));
    }
   header('Location: ../index.php');
}

public function sendNewsletter(){
        $this->bdd= new Bdd;
        $this->sujet= $_POST['sujet'];
        $this->destinataire= 'mohamed.bengrich@outlook.fr';
        $this->message = $_POST['message'];

        if (isset($this->sujet) && isset($this->message) && !empty($this->sujet) && !empty($this->message)) {

        $this->req = $this->bdd->getPdo()->query("SELECT mail FROM newsletter");
            while ($this->donnees = $this->req->fetch())

          {
            $this->mail=$this->donnees['mail'];
            $this->entete  = 'MIME-Version: 1.0' . "\r\n";
            $this->entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $this->entete .= 'From: ' . $this->mail . "\r\n";

             $this->maill= mail($this->destinataire, $this->sujet, $this->message, $this->entete);
    }
  }
}


}


$newsletter= new Newsletter;

if (isset($_POST['insertNewsletter'])) {
  $newsletter->insert();
}

if (isset($_POST['sendNewsletter'])) {
  $newsletter->sendNewsletter();
}
 




   ?>
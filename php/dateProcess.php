<?php 
session_start(); 
require_once '../yamifoodCopie/php/bdd.php'; 

$name =$_POST['name'];
$number =$_POST['number'];
$mail =$_POST['mail'];
$place =$_POST['place'];
if (isset($place) && isset($place) && isset($place) && isset($place)) {
  if (!empty($place)&& !empty($place)&& !empty($place)&& !empty($place)) {
    $_SESSION['name'] = $name;
    $_SESSION['number'] = $number;
    $_SESSION['mail'] = $mail;
    $_SESSION['place'] = $place;
  };
    
}



$dates = array();
$datess = array();
$valeur = 0;
$valuesss= [];
$indesirables = array();


$req = $pdo->prepare('SELECT res_date FROM reservation WHERE places >= :place ');
$exec = $req->execute(array(
  'place' => $_SESSION['place']
));
   while ($donnees = $req->fetch())

   {
   

   array_push($dates, $donnees['res_date']);

   } // Fin de la boucle des billets

   $req->closeCursor();
   foreach ($dates as &$value) {
    $datess = explode(' ', $value);
    $values = current($datess).' ';
    if (!in_array($values, $dates)) {
    $value = $values;
    }
    else{
     $value = ""; 
    };
    
   }



// Remove from array


   ?>
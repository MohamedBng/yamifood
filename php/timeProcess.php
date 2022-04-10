<?php
session_start(); 
require_once '../yamifoodCopie/php/bdd.php'; 

$dateUser =$_POST['dateUser'];
if (isset($dateUser) && !empty($dateUser)) {
    $_SESSION['dateUser'] = $dateUser;
}



$req = $pdo->prepare("SELECT * FROM reservation WHERE res_date LIKE :login ");
$exec = $req->execute(array(
  'login' => $_SESSION['dateUser'].'%'
));


$datesTime=[];

while ($donnees = $req->fetch())

  {
  

   array_push($datesTime, $donnees['res_date']);
  } // Fin de la boucle des billets

  $req->closeCursor();


   foreach ($datesTime as &$value) {
    $datessTime = explode(' ', $value);
    $value = end($datessTime); 
   }




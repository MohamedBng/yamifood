<?php
session_start(); 
require_once '../php/bdd.php';

//Tester une variable de session
if(!isset($_SESSION['dateUser'])){
        //Message d'erreur
        $msg = "Login ou mot de passe incorrect.";
        
        //Redirection
        header('Location: ../index.php');
        exit;
    }

// récupérer les valeurs
$timeUser =$_POST['timeUser']; 
$dateUser =$_SESSION['dateUser'];
$name =$_SESSION['name'];
$number =$_SESSION['number'];
$mail =$_SESSION['mail'];
$dateTimeUser= $dateUser." ".$timeUser;
$person=$_SESSION['place'];
echo($person);


if (isset($timeUser) && !empty($timeUser)) {
    $_SESSION['timeUser'] = $timeUser;
}
// initialiser le nombres de places disponible pour une date a 0
$dateDispo=0;

// sélectionner le nombres de places disponibles de la date entrée par l'utilisateur
$req = $pdo->prepare("SELECT places FROM reservation WHERE res_date LIKE :date ");
$req->execute(array(
  'date' => $dateTimeUser
));





while ($donnees = $req->fetch())

  {
// affecter a la variables le resultat de la requetes  
  $dateDispo= $donnees['places'];
  
   
  } // Fin de la boucle des billets

  $req->closeCursor();

echo($dateDispo);

// On verifie que l'utilisteur ai bien envoyer une date et quelle ai bien etait stocké dans une variable
if (isset($dateTimeUser) && !empty($dateTimeUser)) {

// On verifie qu'il y ai au moin une places disponible pour la date sélectionner
 if ($dateDispo>=1) {
// On soustrait une places au nombres de places disponibles
	$dateDispo=$dateDispo-$person;
  echo($dateDispo);

    $req= $pdo->prepare('UPDATE reservation SET places = :places WHERE res_date = :date');
$req->execute(array(
	'places' => $dateDispo,
    'date' => $dateTimeUser
));

// On insère la reservation dans la table des reservations d'utilisateurs
	$req= $pdo->prepare('INSERT INTO reservation_user(res_date_user, nom, number, mail, place) VALUES(:date, :name, :number, :mail, :place )');
$req->execute(array(
    'name' => $name,
    'number' => $number,
    'mail' => $mail,
    'place' => $person,
    'date' => $dateTimeUser
));



}
/* Si il y a pas de places disponnible alors on suprimme la date de la table des reservation disponible
pour que la date ne soit plus sélectionnable et que l'utilisateur ne puisse plus la réserver*/
else{
	$req = $pdo->prepare("DELETE FROM reservation WHERE res_date= :date ");
$req->execute(array(
  'date' => $dateTimeUser
));
	echo"date indisponible";
};
    
header('Location: ../reservation.php');
 } 




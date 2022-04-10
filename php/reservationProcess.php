<?php
require_once '../yamifoodCopie/php/bdd.php';


$dates = array();
$datess = array();
$valeur = 0;
$valuesss= [];
$indesirables = array();


$req = $pdo->query('SELECT res_date FROM reservation');
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
     $value = " "; 
    };
    
   }


$pos = array_search(' ', $dates);

// Remove from array
unset($dates[$pos]);


   ?>
<?php
require_once '../php/bdd.php';
$date =$_POST['date'];
$places = $_POST['places'];
$tabExtension = explode(',', $date);
date_default_timezone_set('Europe/Paris');    
$DateAndTime = date('Y-m-d h:i:s a', time());  
echo($DateAndTime);
print_r($tabExtension);
if (isset($date) && !empty($date)) {

    $req= $pdo->prepare('INSERT INTO reservation(res_date, places) VALUES(:date, :places)');
foreach ($tabExtension AS $ligne) {
         $req->bindParam('date', $ligne);
         $req->bindParam('places', $places);
                $req->execute();
             };


}



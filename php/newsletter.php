<?php
 
require_once '../php/bdd.php'; 

$mail=$_POST['mail'];
if (isset($_POST['insert'])) {
	$sql = "INSERT INTO newsletter (mail) VALUES (?)";
    $res = $pdo->prepare($sql);
    $exec = $res->execute(array($mail));
    header('Location: ../index.php');
}
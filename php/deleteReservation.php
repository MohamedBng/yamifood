<?php
     require_once '../php/bdd.php';

if(isset($_GET['id'])){
  // récupérer les valeurs 
  $id = $_GET["id"];

  // requete sql pour supprimer 
  $req = $pdo->query('DELETE FROM reservation_user WHERE id='.$id.'');

  // Redirection vers la page d'administration
  

  
}
?>
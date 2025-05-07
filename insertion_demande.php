<?php 
require "config/database.php";

if (isset($_POST['Envoyer'])) {

  $query = $pdo->prepare(INSERT INTO `demande` (`id`, `equipement_id`, `employe_id`, `user_id`, `date`) VALUES (?, ?, ?, ?, current_timestamp());
$query->execute(array($_POST['id'], $_POST['nom_emp'], $_POST['user_id'], $_POST['adresse'], $_POST['fonction'], $_POST['email'], $_POST['telephone']));

  if ($query->rowCount() > 0) {
  	header("Location:demande.php");
  }  
}






 ?>
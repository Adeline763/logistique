<?php
require "config/database.php";

if(isset($_GET['delete_employe'])){
  $id = $_GET['delete_employe'];
  $query = $pdo->prepare("DELETE FROM employe WHERE id = ?");
  $query->execute(array($id));
  if ($query->rowCount() > 0) {
  	header("Location:employe.php");
  }   
}

if(isset($_GET['delete_user'])){
  $id = $_GET['delete_user'];
  $query = $pdo->prepare("DELETE FROM user WHERE id = ?");
  $query->execute(array($id));
  if ($query->rowCount() > 0) {
  	header("Location:user.php");
  }	
}
if(isset($_GET['delete_demande'])){
  $id = $_GET['delete_demande'];
  $query = $pdo->prepare("DELETE FROM demande WHERE id = ?");
  $query->execute(array($id));
  if ($query->rowCount() > 0) {
  	header("Location:demande.php");
  }	
}

if(isset($_GET['delete_equipement'])){
  $id = $_GET['delete_equipement'];
  $query = $pdo->prepare("DELETE FROM equipement WHERE id = ?");
  $query->execute(array($id));
  if ($query->rowCount() > 0) {
  	header("Location:equipements.php");
  }	
}


 ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
 try{

      $pdo=new PDO("mysql:host=localhost;dbname=logistique","root","");
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e){
      die('erreur'.$e->getMessage());
   }

 ?>
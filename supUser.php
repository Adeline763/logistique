<?php 
require"script/db.php";
if(isset($_GET['a']) AND!empty($_GET['a'])){

$user= intval($_GET['a']);
$q=$pdo->prepare("DELETE FROM users WHERE id_user=?");
$q->execute(array($user));
if($q){
	header("Location:user.php");
}
}
 ?>
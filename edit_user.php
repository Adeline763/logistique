
<?php require_once 'header.php';

if(isset($_GET['id'])) {
 $query = $pdo->prepare("SELECT * FROM `user` WHERE id = ?");
 $query->execute(array($_GET['id']));
 $data = $query->fetchAll(PDO::FETCH_ASSOC);
 foreach ($data as $value) {

   $nom = $value['nom'];
   $prenom = $value['prenom'];
   $adresse = $value['adresse'];
   $tel = $value['tel'];
   $email = $value['email'];
   $password = $value['password'];
  }
}

if (isset($_POST['Envoyer'])) {

  $query = $pdo->prepare("UPDATE `user` SET `nom` = ?, `prenom` = ?, `adresse` = ?, tel = ?, `email` = ?, `password` = ? WHERE `user`.`id` = ?");

  $query->execute(array($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['telephone'], $_POST['email'], $_POST['password'], $_GET['id']));

  if ($query->rowCount() > 0) {
    header("Location:user.php");
  }  
} 
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulaire pour modifier l'utilisateur <?php echo strtoupper($nom); ?></h1>
      </div>
  <form method="POST">
   <div class="input-group mb-3">
    <span class="input-group-text">a</span>
    <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" name="nom" value="<?php echo $nom; ?>">
  </div> 

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Prenom" aria-label="Prenom" name="prenom" value="<?php echo $prenom; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="email" class="form-control" placeholder="Email" aria-label="email" name="email" value="<?php echo $email; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Adresse" aria-label="Adresse" name="adresse" value="<?php echo $adresse; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="number" class="form-control" placeholder="Telephone" aria-label="Telephone" name="telephone" value="<?php echo $tel; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" value="<?php echo $password; ?>">
  </div>
 
  <input type="reset" class=" btn btn-outline-warning rounded-pill px-3" name="Reset">
  <input type="submit" class="btn btn-primary rounded-pill px-3" name="Envoyer">
 </form>
<?php require "footer.php" ?>

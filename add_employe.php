
<?php require_once 'header.php';

if (isset($_POST['Envoyer'])) {

  $query = $pdo->prepare("INSERT INTO `employe` (`nom_emp`, `prenom_emp`, `user_id`, `adresse`, `fonction`, `email`, `telephone`) VALUES (?, ?, ?, ?, ?, ?,?)");
$query->execute(array($_POST['nom'], $_POST['prenom'], $_POST['utilisateur'], $_POST['adresse'], $_POST['fonction'], $_POST['email'], $_POST['telephone']));

  if ($query->rowCount() > 0) {
    header("Location:employe.php");
  }  
}
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulaire d'ajout des employes</h1>
      </div>
  <form method="POST">
   <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" name="nom">
  </div> 

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Prenom" aria-label="Prenom" name="prenom">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Adresse" aria-label="Adresse" name="adresse">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="number" class="form-control" placeholder="Telephone" aria-label="Telephone" name="telephone">
  </div>

    <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Fonction" aria-label="Fonction" name="fonction">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>

    <select class="form-control" name="utilisateur"> 
       <option value="0">-- Choisir un utilisateur --</option>
      <?php   $query = $pdo->prepare("SELECT * FROM `user`");
              $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
               ?>
      <option value="<?php echo $value['id']; ?>"><?php  echo $value['nom']; ?></option>
  
     <?php  } ?>

    </select>
  </div>
 
  <input type="reset" class=" btn btn-outline-warning rounded-pill px-3" name="Reset">
  <input type="submit" class="btn btn-primary rounded-pill px-3" name="Envoyer">
 </form>
<?php require "footer.php"?> 
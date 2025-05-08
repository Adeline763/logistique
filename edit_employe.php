
<?php require_once 'header.php';

if(isset($_GET['edit_employe'])) {
 $query = $pdo->prepare("SELECT * FROM `employe` WHERE id = ?");
 $query->execute(array($_GET['edit_employe']));
 
 $data = $query->fetchAll(PDO::FETCH_ASSOC);
 foreach ($data as $value) {

   $nom = $value['nom_emp'];
   $prenom = $value['prenom_emp'];
   $utilisateur = $value['user_id'];
   $adresse = $value['adresse'];
   $fonction = $value['fonction'];
   $email = $value['email'];
   $telephone = $value['telephone'];
  }
}

if (isset($_POST['Envoyer'])) {

  $query = $pdo->prepare("UPDATE `employe` SET `nom_emp` = ?, `prenom_emp` = ?, user_id= ?, adresse= ?, fonction= ?, email= ?, `telephone` = ? WHERE `employe`.`id` = ?");
$query->execute(array($_POST['nom'], $_POST['prenom'], $_POST['utilisateur'], $_POST['adresse'], $_POST['fonction'], $_POST['email'], $_POST['telephone'], $_GET['edit_employe']));

  if ($query->rowCount() > 0) {
    header("Location:employe.php");
  }  
}
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulaire pour modifier l'employe <?php echo strtoupper($nom); ?></h1>
      </div>
  <form method="POST">
   <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" name="nom" value="<?php echo $nom; ?>">
  </div> 

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Prenom" aria-label="Prenom" name="prenom" value="<?php echo $prenom; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" value="<?php echo $email; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Adresse" aria-label="Adresse" name="adresse" value="<?php echo $adresse; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="number" class="form-control" placeholder="Telephone" aria-label="Telephone" name="telephone" value="<?php echo $telephone; ?>">
  </div>

    <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Fonction" aria-label="Fonction" name="fonction" value="<?php echo $fonction; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>

    <select class="form-control" name="utilisateur"> 
       <option value="0" s>-- Choisir un utilisateur --</option>
      <?php   $query = $pdo->prepare("SELECT * FROM `user`");
              $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
               ?>
         <option value="<?php echo $value['id'];?>" 
          <?php if($value['id'] == $utilisateur) echo "selected";?>
         >

          <?php  echo $value['nom']; ?>
         </option>
  
     <?php  } ?>

    </select>
  </div>
 
  <input type="reset" class=" btn btn-outline-warning rounded-pill px-3" name="Reset">
  <input type="submit" class="btn btn-primary rounded-pill px-3" name="Envoyer">
 </form>
<?php require "footer.php"?> 
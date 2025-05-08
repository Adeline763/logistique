
<?php require "header.php" ;
if(isset($_GET['id'])) {
 $query = $pdo->prepare("SELECT * from equipement WHERE id=?");
 $query->execute(array($_GET['id']));
 
 $data = $query->fetchAll(PDO::FETCH_ASSOC);
 foreach ($data as $value) {

   $nom = $value['nom_eq'];
   $utilisateur = $value['user_id'];
  }
}


if (isset($_POST['Envoyer'])) {

  $query = $pdo->prepare("UPDATE `equipement`SET `nom_eq`=?, `user_id`=? WHERE id=?");
  $query->execute(array($_POST['nom'], $_POST['utilisateur'], $_GET['id']));

  if ($query->rowCount() > 0) {
    header("Location:equipements.php");
  }  
}
?> 
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulaire d'ajout d'equipement</h1>
      </div>
  <form  method="POST">
   <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Nom equipement" aria-label="Equipement" name="nom" value="<?php echo $nom; ?>">
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
      <option value="<?php echo $value['id'];?>"
       <?php if ($value['id']==$utilisateur) echo "selected";?>
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
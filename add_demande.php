
<?php require_once 'header.php';
if (isset($_POST['Envoyer'])) {

  $query = $pdo->prepare("INSERT INTO `demande` (`equipement_id`, `employe_id`, `user_id`) VALUES (?, ?, ?)");
$query->execute(array($_POST['equipement'], $_POST['employe'], $_POST['utilisateur']));

  if ($query->rowCount() > 0) {
    header("Location:demande.php");
  }  
}
 ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulaire d'ajout d'une demande</h1>
      </div>
  <form method="POST">
   <div class="input-group mb-3">
    <span class="input-group-text">@</span>

    <select class="form-control" name="employe"> 
       <option value="0">-- Choisir un employe --</option>
      <?php   $query = $pdo->prepare("SELECT * FROM `employe`");
              $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
               ?>
      <option value="<?php echo $value['id']; ?>"><?php  echo $value['nom_emp']; ?></option>
  
     <?php  } ?>

    </select>
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
  <div class="input-group mb-3">
    <span class="input-group-text">@</span>

    <select class="form-control" name="equipement"> 
       <option value="0">-- Choisir un equipement --</option>
      <?php   $query = $pdo->prepare("SELECT * FROM `equipement`");
              $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
               ?>
      <option value="<?php echo $value['id']; ?>"><?php  echo $value['nom_eq']; ?></option>
  
     <?php  } ?>

    </select>
  </div>
   
  <input type="reset" class=" btn btn-outline-warning rounded-pill px-3" name="Reset">
  <input type="submit" class="btn btn-primary rounded-pill px-3" name="Envoyer">
 </form>
<?php require "footer.php"?> 
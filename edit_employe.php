
<?php require "header.php" ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulaire pour modifier un employe</h1>
      </div>
  <form>
   <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Nom" aria-label="Nom">
  </div> 

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Prenom" aria-label="Prenom">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Adresse" aria-label="Adresse">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="number" class="form-control" placeholder="Telephone" aria-label="Telephone">
  </div>

    <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Fonction" aria-label="Fonction">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Utilisateur" aria-label="Utilisateur">
  </div>
 
  <input type="reset" class=" btn btn-outline-warning rounded-pill px-3" name="Reset">
  <input type="submit" class="btn btn-primary rounded-pill px-3" name="Envoyer">
 </form>
<?php require "footer.php"?> 
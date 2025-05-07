
<?php require "header.php" ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Employe</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a type="button" class="btn btn-success rounded-pill px-3" href="add_employe.php">Ajouter</a>
            
          </div>
         
        </div>
      </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
             <tr>
              <th scope="col">Numero</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">User</th>
              <th scope="col">Adresse</th>
              <th scope="col">Fonction</th>
              <th scope="col">Email</th>
              <th scope="col">Telephone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php  
              $query = $pdo->prepare("SELECT employe.id, nom,nom_emp,prenom_emp,employe.adresse,fonction,employe.email,telephone FROM `employe` join user on user_id = user.id");
              $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
               ?>
            <tr>
              <td><?php echo $value['id']; ?></td>
              <td><?php echo $value['nom_emp']; ?></td>
              <td><?php echo $value['prenom_emp']; ?></td>
              <td><?php echo $value['nom']; ?></td>
              <td><?php echo $value['adresse']; ?></td>
              <td><?php echo $value['fonction']; ?></td>
              <td><?php echo $value['email']; ?></td>
              <td><?php echo $value['telephone']; ?></td>
              <td><a type="button" class="btn btn-sm btn-outline-primary" href="edit_employe.php?edit_employe=<?php echo $value['id']; ?>">Editer</a>
              <a type="button" class="btn btn-sm btn-outline-danger" href="suppression.php?delete_employe=<?php echo $value['id']; ?>">Supprimer</a></td>
            </tr>
          <?php   } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<?php require "footer.php" ?>

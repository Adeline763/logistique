
<?php require "header.php" ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Equipements</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a type="button" class="btn btn-success rounded-pill px-3" href="add_equipement.php">Ajouter</a>
          </div>
        </div>
      </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
             <tr>
              <th scope="col">id</th>
              <th scope="col">Equipement</th>
              <th scope="col">Utilisateur</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php  
              $query = $pdo->prepare("SELECT equipement.id,nom_eq,nom,date from equipement join user on user_id=user.id");
              $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
               ?>
            <tr>
              <td><?php echo $value['id']; ?></td>
              <td><?php echo $value['nom_eq']; ?></td>
               <td><?php echo $value['nom']; ?></td>
              <td><?php echo $value['date']; ?></td>
               <td><a type="button" class="btn btn-sm btn-outline-primary" href="edition.php?edit_equipement=<?php echo $value['id']; ?>">Editer</a>
              <a type="button" class="btn btn-sm btn-outline-danger" href="suppression.php?delete_equipement=<?php echo $value['id']; ?>">Supprimer</a></td>
            </tr>
          <?php   } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<?php require "footer.php" ?>

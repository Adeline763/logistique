
<?php require "header.php" ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Demande</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
           
          </div>
         
        </div>
      </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
             <tr>
              <th scope="col">id</th>
              <th scope="col">User</th>
              <th scope="col">Employe</th>
              <th scope="col">Equipements</th>
              <th scope="col">Date</th>
              <th>Action</th>
             
            </tr>
          </thead>
          <tbody>
            <?php  
              $query = $pdo->prepare("SELECT demande.id,user.nom,nom_emp,nom_eq, demande.date from equipement join user on equipement.user_id = user.id join employe on employe.user_id = user.id  join demande on employe_id= employe.id");
              $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
               ?>
            <tr>
              <td><?php echo $value['id']; ?></td>
              <td><?php echo $value['nom']; ?></td>
              <td><?php echo $value['nom_emp']; ?></td>
              <td><?php echo $value['nom_eq']; ?></td>
              <td><?php echo $value['date']; ?></td>
               <td><a type="button" class="btn btn-sm btn-outline-secondary" href="edition.php?edit_demande=<?php echo $value['id']; ?>">Editer</a>
              <a type="button" class="btn btn-sm btn-outline-secondary" href="suppression.php?delete_demande=<?php echo $value['id']; ?>">Supprimer</a></td>
            </tr>
          <?php   } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<?php require "footer.php" ?>

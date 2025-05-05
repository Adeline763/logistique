
<?php require "header.php" ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-primary rounded-pill px-3">Ajouter</button>
   
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
              <th scope="col">Adresse</th>
              <th scope="col">Telephone</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <?php  
              $query = $pdo->prepare("SELECT * FROM `user`");
              $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
               ?>
            <tr>
              <td><?php echo $value['id']; ?></td>
              <td><?php echo $value['nom']; ?></td>
              <td><?php echo $value['prenom']; ?></td>
              <td><?php echo $value['adresse']; ?></td>
              <td><?php echo $value['tel']; ?></td>
              <td><?php echo $value['email']; ?></td>
              <td><?php echo $value['password']; ?></td>
              <td><a type="button" class="btn btn-secondary rounded-pill px-3" href="edition.php?edit_user=<?php echo $value['id']; ?>">Editer</a>
              <a type="button" class="btn btn-danger rounded-pill px-3" href="suppression.php?delete_user=<?php echo $value['id']; ?>">Supprimer</a></td>
            </tr>
          <?php   } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<?php require "footer.php" ?>

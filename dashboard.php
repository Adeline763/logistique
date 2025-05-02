
<?php require "header.php" ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi" aria-hidden="true"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      <h2>USER</h2>
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
            </tr>
          </thead>
          <tbody>
            <?php  
              $query = $pdo->prepare("SELECT * FROM `employe`");
              $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
               ?>
            <tr>
              <td><?php echo $value['id']; ?></td>
              <td><?php echo $value['nom_emp']; ?></td>
              <td><?php echo $value['prenom_emp']; ?></td>
              <td><?php echo $value['user_id']; ?></td>
              <td><?php echo $value['adresse']; ?></td>
              <td><?php echo $value['fonction']; ?></td>
              <td><?php echo $value['email']; ?></td>
              <td><?php echo $value['telephone']; ?></td>
            </tr>
          <?php   } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<?php require "footer.php" ?>
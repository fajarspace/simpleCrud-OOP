<div class="container">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm">
      <br>
      <thead class="bg-primary text-white">
        <tr>
          <th class="text-center">No</th>
          <th class="text-center" width="25%">Nama</th>
          <th class="text-center">Email</th>
          <th class="text-center">Aksi</th>
          <!-- <th class="text-center align-middle"
width="20%">Opsi</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        include 'action.php';
        $aksi = new Aksi();
        $rows = $aksi->fetch();
        $i = 1;
        if (!empty($rows)) {
          foreach ($rows as $row) {
        ?>
            <tr>
              <td class="text-center"><?php echo $i++; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td class="text-center"><?php echo $row['email']; ?></td>
              <td class="text-center"><a class="btn btn-info " href="?page=detail&id=<?php echo $row['id']; ?>" role="button">Detail</a>
              </td>
            </tr>
        <?php
          }
        } else {
          echo "No data";
        }
        ?>
      </tbody>
    </table>
  </div>
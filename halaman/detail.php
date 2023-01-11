<div class="container">
  <div class="card mt-3">
    <div class="card-header">
      <a href="?page=home" class="btn btn-primary mx-auto float-end"><i class="bi bi-arrow-left-circle"></i> Back</a>
      <br>
      <h3 class="float-start">Detail</h3>
    </div>
    <div class="card-body">
      <?php
      include 'action.php';
      $aksi = new Aksi();
      $id = $_REQUEST['id'];
      $rows = $aksi->detail($id);
      if (!empty($rows)) {
      ?>
        <p>Nama : <?php echo $rows['nama']; ?></p>
        <p>Email : <?php echo $rows['email']; ?></p>
        <p>No Hp : <?php echo $rows['nomor_hp']; ?></p>
        <p>Alamat : <?php echo $rows['alamat']; ?></p>
      <?php
      } else {
        echo "No data";
      }
      ?>

    </div>
  </div>
</div>
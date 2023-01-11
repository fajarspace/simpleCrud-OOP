<div class="container">
  <div class="card mt-3">
    <div class="card-header">
      <a href="?page=dashboard" class="btn btn-primary mx-auto float-end"><i class="bi bi-arrow-left-circle"></i> Back</a>
      <br>
      <h3 class="float-start">Edit</h3>
    </div>
    <div class="card-body">
      <?php
      include 'action.php';
      $aksi = new Aksi();
      $id = $_REQUEST['id'];
      $row = $aksi->edit($id);
      if (isset($_POST['update'])) {
        if (
          isset($_POST['nama']) && isset($_POST['email']) &&
          isset($_POST['nomor_hp'])
        ) {
          if (
            !empty($_POST['nama']) && !empty($_POST['email']) &&
            !empty($_POST['nomor_hp'])
          ) {
            $data['id'] = $id;

            $data['nama'] = $_POST['nama'];
            $data['nomor_hp'] = $_POST['nomor_hp'];
            $data['email'] = $_POST['email'];
            $data['alamat'] = $_POST['alamat'];
            $update = $aksi->update($data);
            if ($update) {
              echo "<script>alert('Update data berhasil');</script>";
              echo "<script>window.location.href='?page=dashboard';</script>";
            } else {
              echo "<script>alert('Update data gagal');</script>";
              echo "<script>window.location.href='?page=dashboard';</script>";
            }
          } else {
            echo "<script>alert('Data Kosong');</script>";
            header("Location: ?page=edit&id=$id");
          }
        }
      }
      ?>
      <form action="" method="POST">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="nama" value="<?php echo $row['nama']; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Nomor Handphone</label>
          <input type="text" class="form-control" name="nomor_hp" placeholder="nomor_hp" value="<?php echo $row['nomor_hp']; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <textarea style="height: 100px;" id="alamat" type="text" class="form-control" name="alamat"></textarea>
        </div>
        <button type="submit" class="btn btn-info" name="update">Submit</button>

        <a href="?page=dashboard" class="btn btn-secondary mx-auto"> Cancel<a>

      </form>
    </div>
  </div>
</div>

<script>
  document.getElementById("alamat").value = "<?php echo $row['alamat']; ?>";
</script>
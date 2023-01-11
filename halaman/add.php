<div class="container">
  <div class="card mt-3">
    <div class="card-header">
      <a href="?page=dashboard" class="btn btn-primary mx-auto float-end"><i class="bi bi-arrow-left-circle"></i> Back</a>
      <br>
      <h3 class="float-start">Add</h3>
    </div>
    <div class="card-body">
      <?php
      include 'action.php';
      $aksi = new Aksi();
      $insert = $aksi->insert();
      ?>
      <form action="" method="POST">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="nama">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" name="email" placeholder="email">
        </div>
        <div class="mb-3">
          <label class="form-label">Nomor Handphone</label>
          <input type="text" class="form-control" name="nomor_hp" placeholder="nomor_hp">
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <textarea style="height: 100px;" type="text" class="form-control" name="alamat" placeholder="alamat"></textarea>
        </div>
        <button type="submit" class="btn btn-info" name="submit">Submit</button>
        <button type="reset" class="btn btn-danger" name="reset">Reset</button>
      </form>
    </div>
  </div>
</div>
<div class="container">
  <div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">
      Contact
      <div>
        <a href="?page=add" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add</a>
      </div>
    </h5>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm">
      <br>
      <thead class="bg-primary text-white">
        <tr>
          <th class="text-center">No</th>
          <th class="text-center" width="25%">Nama</th>
          <th class="text-center">Email</th>

          <th class="text-center">No. Handphone</th>
          <th class="text-center">Alamat</th>
          <th class="text-center align-middle" width="20%">Opsi</th>
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
              <td class=""><?php echo $row['email']; ?></td>
              <td class=""><?php echo $row['nomor_hp']; ?></td>
              <td class=""><?php echo $row['alamat']; ?></td>
              <td class="aksi">
                <div class="text-center">
                  <a class="btn btn-warning btn-sm " href="?page=edit&id=<?php echo $row['id']; ?>" role="button"><i class="bi bi-pencil-square"></i></a>

                  <a class="btn btn-danger btn-sm" role="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $row['id']; ?>"><i class="bi bi-trash"></i></a>
                </div>

                <div class="modal fade" id="staticBackdrop<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Peringatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Yakin ingin menghapus data?</p>
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                        <a class="btn btn-danger" role="button" href="?page=delete&id=<?php echo $row['id']; ?>">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>

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
</div>
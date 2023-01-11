<?php
class Aksi
{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "crud";
  protected $conn;
  function __construct()
  {
    if (!isset($this->conn)) {
      $this->conn = new mysqli(
        $this->servername,
        $this->username,
        $this->password,
        $this->dbname
      );
    }
    if (!$this->conn) {
      echo 'Koneksi Gagal';
    }
    // else {
    // echo 'Koneksi Berhasil';
    // }
    return $this->conn;
  }
  public function fetch()
  {
    $data = null;
    $query = "SELECT * FROM contact";
    if ($sql = $this->conn->query($query)) {
      while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
      }
    }
    return $data;
  }
  public function insert()
  {
    if (isset($_POST['submit'])) {
      if (
        isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['alamat']) && isset($_POST['nomor_hp'])
      ) {
        if (
          !empty($_POST['nama']) && !empty($_POST['email']) && !empty($_POST['alamat']) && !empty($_POST['nomor_hp'])
        ) {
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $alamat = $_POST['alamat'];
          $nomor_hp = $_POST['nomor_hp'];
          $query = "INSERT INTO contact (nama,email,alamat,nomor_hp)
          VALUES ('$nama','$email','$alamat','$nomor_hp')";
          if ($sql = $this->conn->query($query)) {
            echo "<script>alert('Tambah Data Berhasil');</script>";
            echo "<script>window.location.href = '?page=dashboard';</script>";
          } else {
            echo "<script>alert('Tambah Data Gagal');</script>";
            echo "<script>window.location.href = '?page=dashboard';</script>";
          }
        } else {
          echo "<script>alert('Tidak boleh ada kolom kosong!');</script>";
          echo "<script>window.location.href = '?page=add';</script>";
        }
      }
    }
  }
  public function delete($id)
  {
    $query = "DELETE FROM contact where id = '$id'";
    if ($sql = $this->conn->query($query)) {
      return true;
    } else {
      return false;
    }
  }
  public function edit($id)
  {
    $data = null;
    $query = "SELECT * FROM contact WHERE id = '$id'";
    if ($sql = $this->conn->query($query)) {
      while ($row = $sql->fetch_assoc()) {
        $data = $row;
      }
    }
    return $data;
  }
  public function update($data)
  {
    $query = "UPDATE contact SET nama='$data[nama]', email='$data[email]',alamat='$data[alamat]', nomor_hp='$data[nomor_hp]' WHERE id='$data[id] '";
    if ($sql = $this->conn->query($query)) {
      return true;
    } else {
      return false;
    }
  }
  public function detail($id)
  {
    $data = null;
    $query = "SELECT * FROM contact WHERE id = '$id'";
    if ($sql = $this->conn->query($query)) {
      while ($row = $sql->fetch_assoc()) {
        $data = $row;
      }
    }
    return $data;
  }
}

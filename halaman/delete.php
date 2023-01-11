<?php
include 'action.php';
$aksi = new Aksi();
$id = $_REQUEST['id'];
$delete = $aksi->delete($id);
if ($delete) {
  echo "<script>alert('Hapus Data Berhasil !');</script>";
  echo "<script>window.location.href = '?page=dashboard';</script>";
}

<?php
$conn = new mysqli("localhost", "root", "", "crud");
if ($conn->connect_error) {
  die('Koneksi bermasalah !' . $conn->connect_error);
}
//echo "Koneksi Sukses !";

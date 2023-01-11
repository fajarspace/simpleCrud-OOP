<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OOP - CRUD</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Bootstrap Font Icon CSS -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <h3 class="text-center">Pemrograman Orientasi Objek</h3>
  <!-- Navbar Atas -->
  <?php
  include "halaman/navbar.php";
  ?>
  <!-- Area Konten -->
  <?php
  if (isset($_GET["page"])) {
    $page = $_GET["page"];
    switch ($page) {
      default:
        echo "<h3> Maaf, halaman tidak ditemukan !</h3>";
        break;
      case "home":
        include "halaman/home.php";
        break;
      case "tentang":
        include "halaman/about.php";
        break;
      case "dashboard":
        include "halaman/dashboard.php";
        break;
      case "add":
        include "halaman/add.php";
        break;
      case "delete":
        include "halaman/delete.php";
        break;
      case "edit":
        include "halaman/edit.php";
        break;
      case "detail":
        include "halaman/detail.php";
        break;
    }
  } else {
    include "halaman/home.php";
  }
  ?>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
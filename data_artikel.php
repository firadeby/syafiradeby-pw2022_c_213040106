<?php 
require 'functions.php';

session_start();

if (!isset($_SESSION['loginAdmin'])) {
  header("location: index.php");
  exit;
}

$materi = query("SELECT * FROM materi");




 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style/css/style.css">

    <title>Data Artikel</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white pt-3 pb-3 position-fixed w-100">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"></i>Data Artikel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tambah_data.php">Tambah data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reg_admin.php">Tambah admin</a>
            </li>
          </ul>
          <form action="" method="post"> 
              <input type="text" name="keyword" class="form me-3" placeholder="Cari Artikel" autocomplete="off" id="keyword2">
          </form>
          <a href="logout.php" class="me-2 btn login" id="keyword2">logout</a>
        </div>
      </div>
    </nav>

    <section class="pt-5">
      <div class="container pt-5" id="isi2">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal Upload</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
              <tbody>
                <?php  $i=1;?>
                <?php foreach ($materi as $art) :?>
                  <tr>
                    <th scope="col"><?php echo $i++ ?></th>
                    <td scope="col"><img src="asset/img/<?php echo $art["gambar_mtr"] ?>" width="100px"></td>
                    <td scope="col"><?php echo $art["judul"] ?></td>
                    <td scope="col"><?php echo $art["tanggal_up"] ?></td>
                    <td scope="col">
                      <a href="ubah_data.php?id=<?php echo $art['id_mtr'] ?>" class="me-2 btn login">Ubah</a>
                      <a href="hapus_data.php?id=<?php echo $art['id_mtr']  ?>" onclick="return confirm('Anda yakin?');" class="me-2 btn login">Hapus</a>
                      <a href="detail_admin.php?id=<?php echo $art['id_mtr'] ?>" class="me-2 btn login">Detail</a>
                    </td>
                  </tr>             
                <?php endforeach?>
            </tbody>
          </table>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="style/js/script2.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
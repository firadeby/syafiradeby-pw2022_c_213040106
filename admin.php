<?php
session_start();

if (!isset($_SESSION['loginAdmin'])) {
  header("location: index.php");
  exit;
};

require 'functions.php';

$admin = $_SESSION['aLogin'];
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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>Dashboard Admin</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white pt-3 pb-3 position-fixed w-100">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"></i>History.com</a>
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
              <a class="nav-link" href="reg_admin.php">Registrasi Admin</a>
            </li>
          </ul>
          <img src="asset/img/<?php echo $admin['foto_admin'] ?>" width="35px" height="35px" style="border-radius: 50px;"><span><p class="ms-2 me-2"><?php echo $admin['username_admin'] ?></p></span>
          <a href="logout.php" class="me-2 btn login">logout</a>
        </div>
      </div>
    </nav>

    <section>
      <div class="container-fluid hero-admin">
        <div class="container h=100 pt-5">
          <div class="row w-100 h-100 hero-row-admin pt-5">
            <h1 style="color: black;" class="fw-bold ps-4">Dashboard</h1>
            <div class="col-md-4 p-4">
              <div class="card bg-primary" style="height: 250px;">
                <div class="row h-100 p-4 text-center">
                  <h1><i class="fa-solid fa-database"></i></h1>
                  <p class="fw-bold">Data Artikel</p>
                </div>
                <a href="data_artikel.php" class="btn btn-admin" style="color: white !important;">Detail <span><i class="fa-solid fa arrow-right"></i></span></a>
              </div>
            </div>
            <div class="col-md-4 p-4">
              <div class="card bg-success" style="height: 250px;">
                <div class="row h-100 p-4 text-center">
                  <h1><i class="fa-solid fa-user-plus"></i></h1>
                  <p class="fw-bold">Data Pengguna</p>
                </div>
                <a href="data_user.php" class="btn btn-admin" style="color: white !important;">Detail <span><i class="fa-solid fa arrow-right"></i></span></a>
              </div>
            </div>
            <div class="col-md-4 p-4" >
               <div class="card bg-danger" style="height: 250px;">
                <div class="row h-100 p-4 text-center">
                  <h1><i class="fa-solid fa-lock"></i></h1>
                  <p class="fw-bold">Data Admin</p>
                </div>
                <a href="data_admin.php" class="btn btn-admin" style="color: white !important;">Detail <span><i class="fa-solid fa arrow-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="ms-4 col-md-8">
          <div class="row bg-primary border p-1">
            <p>Halo <?php echo $admin['nama_admin'] ?> </p>
          </div>
          <div class="row bg-white border p-1">
            <p style="color: black; height: 90px;">Selamat datang admin di sistem informasi history.com. Disini anda dapat melihat data user, data admin, data artikel serta akses CRUD.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

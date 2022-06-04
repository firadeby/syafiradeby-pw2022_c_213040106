<?php 

session_start();

if (!isset($_SESSION['loginUser'])) {
  header("location: index.php");
  exit;
}

require 'functions.php';

$p = $_SESSION['pLogin'];

$materi = query("SELECT * FROM materi");
$mtr = query("SELECT * FROM materi ORDER BY tanggal_up DESC LIMIT  4");




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
    <link rel="stylesheet" type="text/css" href="style/css/style.css?x=5">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>History.com</title>
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
              <a class="nav-link" href="#">Semua</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#" id="gitar">Sejarah Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sejarah Dunia</a>
            </li>
          </ul>
          <img src="asset/img/<?php echo $p['foto_pengguna'] ?>" width="35px" height="35px" style="border-radius: 50px;"><span><p class="ms-2 me-2"><?php echo $p['username_pengguna'] ?></p></span>
          <a href="logout.php" class="me-2 btn login fw-bold">logout</a>
        </div>
      </div>
    </nav>

    <section>
      <div class="container-fluid hero">
        <div class="container h=100">
          <div class="row w-100 h-100 hero-row">
            <div class="col-md-6 my-auto">
              <h2>Selamat Datang di <span class="fw-bold">History.com</span></h2>
              <p>Tempat yang tepat untuk anda menjelajahi masa lalu.</p>
              <a href="" class="btn btn-outline-light mt-3">Lets Read</a>
              
            </div>
            <div class="col-md-6 my-auto text-center">
              <img src="asset/img/img1.png" style="border-radius:50px;">
              <img src="asset/img/img2.png" style="border-radius:50px;">
              <img src="asset/img/img1.png" style="border-radius:50px;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section> 
      <div class="container-fluid content">
        <div class="container h=100">
          <div class="row shadow-sm box-content">
            <h4 style="color: black;" class="pt-4 ps-5 fw-bold">Artikel Terbaru</h4>

            <?php foreach ($mtr as $m ): ?>
              <div class="col-md-3 p-4">
                <div class="card card-limit shadow-sm p-3">
                  <img src="asset/img/<?php echo $m['gambar_mtr'] ?>">
                  <a href="detail.php?id=<?php echo $m['id_mtr'] ?>"><p style="color: black;" class="fw-bold pt-2"><?php echo $m['judul']; ?></p></a>
                </div>
              </div>
            <?php endforeach ?>
            
          </div>
        </div>
      </div>
    </section>

     <section> 
      <div class="container-fluid content">
        <div class="container h=100">
          <div class="row">
            <form action="" method="post">
              <div class="input-group mb-4 mt-4">
                  <input type="text" name="keyword" class="form-control" placeholder="Cari artikel" autocomplete="off" id="keyword1">
              </div> 
            </form>
            <div id="isi1" class="row">
            <?php foreach ($materi as $m): ?>
              <div class="col-md-6">
                <div class="card shadow-sm p-3 mb-5">
                  <img src="asset/img/<?php echo $m['gambar_mtr'] ?>" >
                  <a href="detail.php?id=<?php echo $m['id_mtr'] ?>"><p style="color: black; font-size: 20px;" class="fw-bold pt-2"><?php echo $m['judul']; ?></p></a>
                </div>
              </div>
            <?php endforeach ?>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section> 
      <div class="container-fluid hero footer">
        <div class="container h=100">
          <div class="row p-4">
           <div class="text-center text-md-center">
              <ul class="list-unstyled list-inline me-0">
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
            <p class="copyright text-center">Copyright &copy; by Syafira Debi Sanjaya</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="style/js/script1.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php

session_start();

if (isset($_SESSION['loginAdmin'])) {
  header("location: admin.php");
} elseif (isset($_SESSION['loginUser'])) {
  header("location: index_login.php");
  exit;
}; 

require 'functions.php';



if (isset($_POST['login'])){

  $login = login($_POST);
   
}





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
    <link rel="stylesheet" type="text/css" href="style/css/style.css?x=4">

    <title>Login</title>
  </head>
  <body>

    <section>
      <div class="container-fluid hero">
        <div class="container h=100 ">
          <div class="row row-login w-100 h-100">
            <div class="col-md-6 p-5 mx-auto my-auto">
              <div class="card shadow-sm text-center my-auto">
                <h4 style="color:black;" class="pt-4 fw-bold">Login</h4>
                <form action="" method="post">
                  <div class="col-md-12">
                    <div class="input-group flex-nowrap pt-4 ps-5 pe-5">
                      <span class="input-group-text" id="addon-wrapping">@</span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off" name="username">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-group flex-nowrap pt-3 ps-5 pe-5">
                      <span class="input-group-text" id="addon-wrapping">#</span>
                      <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off" name="password">
                    </div>
                    <?php if (isset($login['error'])): ?>
                      <p style="color:black; font-style: italic ;" class="m-1"><?php echo $login['pesan'] ?></p>
                    <?php endif ?>
                  </div>
                  <div class="col-md-12 pt-3">
                    <button class="btn login" name="login" type="submit">Login</button>
                  </div>
                </form>
                <p style="color:black;" class="pt-3 pb-3">Belum punya akun? <span class="fw-bold"><a href="registrasi.php" style="color:black; text-decoration: none;">Bikin dulu yuk</a></span></p>
              </div>
            </div>
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
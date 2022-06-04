<?php 
require 'functions.php';

session_start();

if (!isset($_SESSION['loginAdmin'])) {
  header("location: index.php");
  exit;
}


$id = $_GET['id'];

$artikel = query("SELECT * FROM materi JOIN kategori_materi ON materi.id_ktgr = kategori_materi.id_ktgr WHERE id_mtr = $id")[0];

if (isset($_POST['submit'])) {
 
  if ( ubah($_POST) > 0) {
    echo "
      <script>
        alert('Data artikel berhasil diedit');
        document.location.href='data_artikel.php';
      </script>
    ";
  }
  else {
    echo "
      <script>
        alert('Data artikel gagal diedit');
        document.location.href='data_artikel.php';
      </script>
    ";
  }
  
};





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

    <title>Edit Artikel</title>
  </head>
  <body>

    <section>
      <div class="container-fluid hero">
        <div class="container h=100 ">
          <div class="row row-login w-100 h-100">
            <div class="col-md-8 p-5 mx-auto my-auto ">
              <div class="register bg-white border shadow-sm text-center my-auto">
                <h4 style="color:black;" class="pt-4 fw-bold">Edit Artikel</h4>
                <form action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $artikel['id_mtr'] ?>">
                  <input type="hidden" name="foto_lama" value="<?php echo $artikel['gambar_mtr'] ?>">
                    <div class="input-group flex-nowrap pt-4 ps-5 pe-5">
                      <span class="input-group-text" id="addon-wrapping">Judul</span>
                      <input type="text" class="form-control" placeholder="Judul Artikel" aria-label="Username" aria-describedby="addon-wrapping" name="judul" autocomplete="off" value="<?php echo $artikel['judul'] ?>">
                    </div>
                    <div class="input-group flex-nowrap pt-4 ps-5 pe-5">
                      <select class="form-select" aria-label="Default select example" name="kategori">
                        <option value="<?php echo $artikel['id_ktgr'] ?>"><?php echo $artikel['nama_ktgr'] ?></option>
                        <option value="1">Sejarah Indonesia</option>
                        <option value="2">Sejarah Dunia</option>
                      </select>
                    </div>
                    <div class=" ps-5 pe-5">
                      <label for="formFile" class="form-label">Default file input example</label>
                      <input class="form-control mb-2" type="file" id="formFile" placeholder="Upload foto anda" name="foto" autocomplete="off">
                      <p class="mb-2" style="color: black;">Gambar lama :</p>
                      <img src="asset/img/<?php echo $artikel['gambar_mtr'] ?>" width="200px">
                    </div>
                    <div class="mb-3 ps-5 pe-5">
                      <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ketik isi artikel" name="isi"><?php echo $artikel['isi']; ?></textarea>
                    </div>
                    <button class="btn login mb-4" name="submit" type="submit">Ubah</button>
                </form>
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
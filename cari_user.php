<?php

session_start();

if (!isset($_SESSION['loginUser'])) {
  header("location: index.php");
  exit;
};

require 'functions.php';


$keyword = $_GET['keyword1'];


$query = "SELECT * FROM materi JOIN kategori_materi ON materi.id_ktgr = kategori_materi.id_ktgr  WHERE judul LIKE '%$keyword%' OR nama_ktgr LIKE '%$keyword%' or tanggal_up LIKE '%$keyword%' OR isi LIKE '%$keyword%'   ";

$materi = query($query);

 ?>

<?php foreach ($materi as $m): ?>
  <div class="col-md-6">
    <div class="card shadow-sm p-3 mb-5">
      <img src="asset/img/<?php echo $m['gambar_mtr'] ?>" >
      <a href="detail.php?id=<?php echo $m['id_mtr'] ?>"><p style="color: black; font-size: 25px;" class="fw-bold pt-2"><?php echo $m['judul']; ?></p></a>
    </div>
  </div>
<?php endforeach ?> 
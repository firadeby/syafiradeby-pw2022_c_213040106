<?php 

session_start();

if (!isset($_SESSION['loginAdmin'])) {
  header("location: index.php");
  exit;
};

require 'functions.php';


$keyword = $_GET['keyword2'];


$query = "SELECT * FROM materi JOIN kategori_materi ON materi.id_ktgr = kategori_materi.id_ktgr  WHERE judul LIKE '%$keyword%' OR nama_ktgr LIKE '%$keyword%' or tanggal_up LIKE '%$keyword%' OR isi LIKE '%$keyword%'   ";

$materi = query($query);

 ?>

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
 
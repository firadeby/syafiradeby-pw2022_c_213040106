<?php 
session_start();

if (!isset($_SESSION['loginAdmin'])) {
  header("location: index.php");
  exit;
};

require 'functions.php';


$keyword = $_GET['keyword3'];


$query = "SELECT * FROM pengguna WHERE nama_pengguna LIKE '%$keyword%' OR email_pengguna LIKE '%$keyword%' or username_pengguna LIKE '%$keyword%' ";

$user = query($query);

 ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Foto</th>
      <th scope="col">Nama Pengguna</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    <?php  $i=1;?>
    <?php foreach ($user as $art) :?>
    <tr>
      <th scope="col"><?php echo $i++ ?></th>
      <td scope="col"><img src="asset/img/<?php echo $art["foto_pengguna"] ?>" width="100px" height="100px"></td>
      <td scope="col"><?php echo $art["nama_pengguna"] ?></td>
      <td scope="col"><?php echo $art["email_pengguna"] ?></td>
      <td scope="col"><?php echo $art["username_pengguna"] ?></td>
        
    </tr>             
    <?php endforeach?>
  </tbody>
</table>  
 
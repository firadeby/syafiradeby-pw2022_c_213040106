<?php 

session_start();

if (!isset($_SESSION['loginAdmin'])) {
  header("location: index.php");
  exit;
}

require 'functions.php';

$id= $_GET["id"];

if (hapus($id) >0) {
	echo "
			<script>
				alert('Data berhasil dihapus');
				document.location.href='data_artikel.php';
			</script>
		";
}

else {
	echo "
			<script>
				alert('Data gagal dihapus');
				document.location.href='data_artikel.php';
			</script>
		";
}

 ?>
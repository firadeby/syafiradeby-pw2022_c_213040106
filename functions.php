<?php

$db = mysqli_connect("localhost","root","","syafiradebi");

// query
function query ($query){
	global $db;
	$result = mysqli_query ($db,$query);
	$rows=[];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]= $row;
	}
	return $rows;
}


//registrasi admin
function registrasiAdmin ($data) {

	global $db;


	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$username  = htmlspecialchars(strtolower($data['username']));
	$password1  = mysqli_real_escape_string($db,$data['password1']);
	$password2  = mysqli_real_escape_string($db,$data['password1']);
	$foto = upload();
	if (!$foto) {
		return false;
	}


	if(empty($username)||empty($password1)||empty($password2)) {
		echo "<script>
				alert('Username atau password tidak boleh kosong');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;
	}


	if (query("SELECT * FROM admin WHERE username_admin = '$username' ")) {
		echo "<script>
				alert('Username sudah terdaftar di sistem');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;
	}



	if (query("SELECT * FROM pengguna WHERE username_pengguna = '$username'")) {
		echo "<script>
				alert('Username sudah terdaftar di sistem');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;
	}


	if ( $password1 !== $password2) {
		echo "<script>
				alert('Kombinasi password tidak sesuai');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;

	}


	if (strlen($password1)<5) {
		echo "<script>
				alert('Password terlalu pendek');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;
	}

// jika usernam dan password sudah sesuiai

	$password_baru = password_hash($password2, PASSWORD_DEFAULT);

	$query = "INSERT INTO admin VALUES (
		'',
		'$nama',
		'$username',
		'$password_baru',
		'$email',
		'$foto')
	";
	mysqli_query($db,$query)  ;
	return mysqli_affected_rows($db);
}


// registrasi pengguna
function registrasiPengguna ($data) {

	global $db;


	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$username  = htmlspecialchars(strtolower($data['username']));
	$password1  = mysqli_real_escape_string($db,$data['password1']);
	$password2  = mysqli_real_escape_string($db,$data['password1']);
	$foto = upload();
	if (!$foto) {
		return false;
	}


	if(empty($username)||empty($password1)||empty($password2)) {
		echo "<script>
				alert('Username atau password tidak boleh kosong');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;
	}



	if (query("SELECT * FROM admin WHERE username_admin = '$username' ")) {
		echo "<script>
				alert('Username sudah terdaftar di sistem');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;
	}



	if (query("SELECT * FROM pengguna WHERE username_pengguna = '$username'")) {
		echo "<script>
				alert('Username sudah terdaftar di sistem');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;
	}


	if ( $password1 !== $password2) {
		echo "<script>
				alert('Kombinasi password tidak sesuai');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;

	}



	if (strlen($password1)<5) {
		echo "<script>
				alert('Password terlalu pendek');
				document.location.href='tambah_admin.php';
			</script>
		";
		return false;
	}


	$password_baru = password_hash($password2, PASSWORD_DEFAULT);

	$query = "INSERT INTO pengguna VALUES (
		'',
		'$nama',
		'$username',
		'$password_baru',
		'$email',
		'$foto')
	";
	mysqli_query($db,$query) ;
	return mysqli_affected_rows($db);
}

// fungsi untuk upload gambar

function upload() {

	$nama = $_FILES['foto']['name'];
	$size = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmp = $_FILES['foto']['tmp_name'];

	

	if ( $error === 4) {
		echo "
			<script>
				alert('Pilih gambar terlebuh dahulu');
			</script>
		";
		return false;
	}

	

	$ekstensi = ['jpg', 'png', 'jpeg'];
	$ekstensiGambar = explode('.', $nama);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensi)) {
		echo "
			<script>
				alert('Pastikan yang anda upload adalah file gambar');
			</script>
		";
	}

	

	if ($size > 1000000) {
		echo "
			<script>
				alert('Ukuran gambar yang anda upload terlalu besar');
			</script>
		";
	}

	
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmp, 'asset/img/'.$namaFileBaru);
	return $namaFileBaru;

}

function tambah ($data) {

	global $db;

	$judul = htmlspecialchars($data["judul"]) ;
	$kategori = htmlspecialchars($data["kategori"]);
	$isi = htmlspecialchars($data["isi"]);
	$foto = upload();

	if (!$foto) {
		return false;
	}

	$query = "INSERT INTO materi VALUES ('', '$kategori','$judul','$isi',CURRENT_TIMESTAMP,'$foto')";

	mysqli_query($db,$query) or die(mysqli_error($db));

	return mysqli_affected_rows ($db);
}

// ubah data produk

function ubah ($data) {
	global $db;

	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]) ;
	$kategori = htmlspecialchars($data["kategori"]);
	$isi = htmlspecialchars($data["isi"]);
	$foto_lama = $data["foto_lama"];


	if ($_FILES['foto']['error'] ===4 ) {
		$gambar = $foto_lama;
	} else {
		$gambar = upload();
	}


	$query = "UPDATE materi SET

				id_ktgr = '$kategori',
				judul = '$judul',
				isi = '$isi',
				gambar_mtr = '$gambar'

			WHERE id_mtr = $id

	";


	mysqli_query($db,$query) or die(mysqli_error($db));

	return mysqli_affected_rows ($db) ;
}



//fungsi untuk menghapus data

function hapus ($id){
	global $db;
	mysqli_query ($db,"DELETE FROM materi WHERE id_mtr = $id");
	return mysqli_affected_rows ($db);
}

function login($data){

      global $db;
      		
	  $username = htmlspecialchars($data["username"]);
	  $password = htmlspecialchars($data["password"]);

	  $admin = mysqli_query($db,"SELECT * FROM admin WHERE username_admin = '$username' ");
	  $pengguna = mysqli_query($db,"SELECT * FROM pengguna WHERE username_pengguna = '$username' ");
	  

	  if (mysqli_num_rows($admin) === 1) {

	    $rAdmin = mysqli_fetch_assoc($admin);

	        if (password_verify($password, $rAdmin['password_admin'])) {
	        $_SESSION['loginAdmin'] = true;
	        $_SESSION['aLogin'] = $rAdmin;
	        header("location: admin.php");
	        exit;

	    }    
	    
	  } elseif (mysqli_num_rows($pengguna) === 1) {

	    $rUser = mysqli_fetch_assoc($pengguna);
	    if ( password_verify($password, $rUser['pasword_pengguna'])) {
	      $_SESSION['loginUser'] = true;
	      $_SESSION['pLogin'] = $rUser;
	      header("location: index_login.php");
	      exit;
	    }
	    
	  } else {
	    return [
			'error' => true,
			'pesan' => 'Username atau password salah!'
	    ];
	   }
}


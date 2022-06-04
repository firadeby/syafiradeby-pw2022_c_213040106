//halaman_admin.php
var keyword1 = document.getElementById('keyword1');
var tombol1 = document.getElementById('cari1');
var isi1 = document.getElementById('isi1');

// untuk halaman admin.php

keyword1.addEventListener("keyup", function() {
	
	// buat objecct ajax
	const ajax = new XMLHttpRequest();

	// cek kesiapan ajax
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			isi1.innerHTML = ajax.responseText;
		}
	}

	//eksekusi ajax

	ajax.open('GET','cari_user.php?keyword1=' + keyword1.value, true);
	ajax.send();
});

var keyword2 = document.getElementById('keyword2');
var tombol2 = document.getElementById('cari2');
var isi2 = document.getElementById('isi2');

// untuk halaman admin.php

keyword2.addEventListener("keyup", function() {
	
	// buat objecct ajax
	const ajax = new XMLHttpRequest();

	// cek kesiapan ajax
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			isi1.innerHTML = ajax.responseText;
		}
	}

	//eksekusi ajax

	ajax.open('GET','cari_admin1.php?keyword2=' + keyword2.value, true);
	ajax.send();
});
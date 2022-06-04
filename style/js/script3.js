
var keyword3 = document.getElementById('keyword3');
var tombol3 = document.getElementById('cari3');
var isi3 = document.getElementById('isi3');


keyword3.addEventListener("keyup", function() {
	
	const ajax = new XMLHttpRequest();

	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			isi3.innerHTML = ajax.responseText;
		}
	}


	ajax.open('GET','cari_admin2.php?keyword3=' + keyword3.value, true);
	ajax.send();
});
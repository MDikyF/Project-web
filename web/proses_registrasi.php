<?php 

$koneksi = mysqli_connect('localhost','root','','crud');

if (isset($_POST['masuk'])) {
	$nama  = $_POST['user'];
	$pass = $_POST['pass'];
	
	$insert = "INSERT INTO login VALUES ('','$nama','$pass')";
	$query  = mysqli_query($koneksi,$insert);

	if (mysqli_affected_rows($koneksi)) {
		echo "
			<script>
				alert('SELAMAT DATANG');
				document.location.href='input.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('REGISTRASI GAGAL');
				document.location.href='halaman_registrasi.php';
			</script>
		";
	}
}

?>
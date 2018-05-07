<?php 
require 'koneksi.php';
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$address = $_POST['address'];
	$query = "INSERT INTO info VALUES ('', '$nama', '$address')";
	$sql = mysqli_query ($koneksi, $query);
	if (mysqli_affected_rows($koneksi)) {
		echo "
				<script>
					alert('DATA BERHASIL DITAMBAH');
				</script>";
			header("LOCATION:input.php");
	}
	else {
		echo "
				<script>
					alert('DATA GAGAL DITAMBAH');
				</script>";
				header('LOCATION:input.php');
	}
}
?>
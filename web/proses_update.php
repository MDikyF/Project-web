<?php 
require 'koneksi.php';
$id = $_GET['id'];

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$address = $_POST['address'];
	$query = "UPDATE info SET name = '$nama', address = '$address' WHERE id = '$id'";
	$sql = mysqli_query ($koneksi, $query);
	if ($query) {
		echo "
				<script>
					alert('DATA BERHASIL DIUPDATE');
				</script>";
			header("LOCATION:input.php");
	}
	else {
		echo "
				<script>
					alert('DATA GAGAL DIUPDATE');
				</script>";
				header('LOCATION:input.php');
	}
}
 ?>
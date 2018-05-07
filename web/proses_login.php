<?php 
	require 'koneksi.php';
	if (isset($_POST['submit'])) {
	$user = $_POST['user'];
	$password = $_POST['password'];

	$query = "SELECT * FROM login WHERE password ='$password' ";
	$sql = mysqli_query ($koneksi, $query);
	$check = mysqli_num_rows ($sql);
	if ($check ==1 ) {
		echo "
				<script>
					alert('LOGIN BERHASIL');
				</script>";
			header("LOCATION:input.php");
	}
	else {
		echo "
				<script>
					alert('LOGIN GAGAL');
					document.location.href='index.php';
				</script>";
	}
}
?>
<?php 
	require 'koneksi.php';
	$id = $_GET['id'];
	$query = "DELETE FROM info WHERE id='$id'";
	$SQL   = mysqli_query($koneksi,$query);
	if (mysqli_affected_rows($koneksi)) {
		echo "
				<script>
					alert('DATA BERHASIL DIHAPUS');
					document.location.href='input.php';
				</script>";
			
	}
	else {
		echo "
				<script>
					alert('DATA GAGAL DIHAPUS');
					document.location.href='input.php';
				</script>";
				
	}

 ?>
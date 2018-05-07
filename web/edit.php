<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div id="ky">
		
<?php 
	require 'koneksi.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM info WHERE id='$id'";
	$sql   = mysqli_query($koneksi,$query);
	while ($data=mysqli_fetch_assoc($sql)) {
	
 ?>
 <form action="proses_update.php?id=<?php echo $data['id'];?>" method="post">
			<label>Nama :</label><br>
			<input type="text" name="nama" value="<?php echo $data['name']; ?>"><br>
			<label>Address :</label><br>
			<input type="text" name="address" value="<?php echo $data['address']; ?>"><br>
			<input name="submit" type="submit" value="masukkan">

		</form>
<?php } ?>
	</div>
</body>
</html>
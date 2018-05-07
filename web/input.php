<!DOCTYPE html>
<html>
<head>
	<title>input data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">Log Out</a></li>
		</ul>
	</nav>
</header>

	<div id="tabel">
	<table border="1" cellpadding="5px">
		<tr>
			<td>Id</td>
			<td>Nama</td>
			<td>Address</td>
			<td>Action</td>
		</tr>
		<?php 
			require 'koneksi.php';
			$query = "SELECT *FROM info";
			$sql   = mysqli_query($koneksi,$query);
			while ($data = mysqli_fetch_assoc($sql)) {
		 ?>
		 <tr>
		 	<td><?php echo $data['id'] ?></td>
		 	<td><?php echo $data['name'] ?></td>
		 	<td><?php echo $data['address'] ?></td>
		 	<td>
		 		<a href="edit.php?id=<?php echo $data ['id']; ?>">edit</a> |
		 		<a href="hapus.php?id=<?php echo $data ['id']; ?>">hapus</a>
		 	</td>
		 </tr>
		<?php } ?>
	</table>
		
	</div>

	<div id="nana">
		<form action="proses_tambah.php" method="post">
			<label>Nama :</label><br>
			<input type="text" name="nama" placeholder="nama"><br>
			<label>Address :</label><br>
			<input type="text" name="address" placeholder="address"><br>
			<input name="submit" type="submit" value="masukkan">
		</form>
	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Data Diri</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body class="bg">
	<br>
	<h2 class="text-center">Tabel Tugas Pengembangan Aplikasi WEB</h2>
	<a href="add_data.php" class="btn btn-primary">Tambah Data</a>
	<div class="text-center">
		<table class="table table-sm">
			<tr>
				<th>ID</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>ALAMAT</th>
				<th>AKSI</th>
			</tr>
			<?php 
				require 'function.php';
				$sql= "SELECT * FROM tbl_188";
				$query = mysqli_query($connect, $sql);

				while ($row=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?=$row['id'];?></td>
				<td><?=$row['nama'];?></td>
				<td><?=$row['nim'];?></td>
				<td><?=$row['alamat'];?></td>
				<td><a class="btn btn-info" href="form_update.php?id=<?=$row['id']?>">Update</a> | 
					<a class="btn btn-danger" href="delete.php?id=<?=$row['id']?> " onclick="return confirm('Anda yakin ingin menghapus?')">Delete</a></td>
			</tr>
			<?php 
			}
			 ?>
		</table>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body class="bg">
	<?php 
	require 'function.php';
	$id=$_GET['id'];
	$sql="SELECT * FROM tbl_188 where id=$id";
	$query=mysqli_query($connect,$sql);
	if (!$query) {
		echo "query salah";
	}
	 ?>

	 <br><br><br><br><br>
	 <?php 
	 while ($row=mysqli_fetch_array($query))
	 {
	 ?>
	 <div class="container-xl">
		 <form class="styleform" method="post" action="update.php">
		 	<h2 class="text-center">Update Data</h2>
			<table>
				<tr>
					<td><label hidden>ID</label></td>
					<td><input class="styleinput" type="text" name="id" value="<?=$row['id']?>" hidden></td>
				</tr>
				<tr>
					<td><label class="stylelabel">Nama:</label></td>
					<td><input class="styleinput" type="text" name="nama" value="<?=$row['nama']?>"></td>
				</tr>
				<tr>
					<td><label class="stylelabel">NIM:</label></td>
					<td><input class="styleinput" type="text" name="nim" value="<?=$row['nim']?>"></td>
				</tr>
				<tr>
					<td><label class="stylelabel">Alamat:</label></td>
					<td><input class="styleinput" type="text" name="alamat" value="<?=$row['alamat']?>"></td>
				</tr>
			</table><br>
			<div class="d-grid gap-2">
				<button class="btn btn-primary" type="submit" name="submit">Update</button>
			</div>
		</div>		
		</form>
	<br><br><br><br><br><br><br>
<?php } ?>
</body>
</html>
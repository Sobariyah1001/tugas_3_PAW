<!DOCTYPE html>
<html>
<head>
	<title>Menambah Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body class="bg"><br><br><br><br><br><br><br>
	<div class="container-xl">
		<form class="styleform" method="post" action="add.php">
			<h2 class="text-center">Menambah Data Baru</h2>
			<table>
				<tr>
					<td><label class="form-label" hidden>ID</label></td>
					<td><input class="styleinput" type="text" name="id" hidden></td>
				</tr>
				<tr>
					<td><label class="stylelabel">Nama</label></td>
					<td><input class="styleinput" type="text" name="nama"></td>
				</tr>
				<tr>
					<td><label class="stylelabel">NIM</label></td>
					<td><input class="styleinput" type="text" name="nim"></td>
				</tr>
				<tr>
					<td><label class="stylelabel">Alamat</label></td>
					<td><input class="styleinput" type="text" name="alamat"></td>
				</tr>
			</table>
			<div class="d-grid gap-2">
				<button class="btn btn-primary" type="submit" name="submit">Add</button>
			</div>		
		</form>
	</div><br><br><br><br><br><br><br><br>
</body>
</html>
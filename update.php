<?php 
require 'function.php';

$id= $_POST['id'];
$nama= $_POST['nama'];
$nim= $_POST['nim'];
$alamat= $_POST['alamat'];

$sql="UPDATE `tbl_188` SET nama='$nama',nim='$nim',alamat='$alamat' WHERE id=$id";
$query=mysqli_query($connect, $sql);
if(!$query){
	echo "
	<script>
		alert('Maaf! Data gagal diupdate');
		
	</script>
	";
}else{
	echo "
	<script>
		alert('Selamat! Data berhasil diupdate');
		document.location.href='create.php';
	</script>";

}
 ?>

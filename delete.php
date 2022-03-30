<?php 
require 'function.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_188 WHERE id=$id";
$query=mysqli_query($connect,$sql);

if(!$query){
	echo "
	<script>
		alert('Maaf! Data gagal dihapus');
		
	</script>
	";
}else{
	echo 
	"<script>
		alert('Selamat! Data berhasil dihapus');
		document.location.href='create.php';
	</script>";

}
 ?>
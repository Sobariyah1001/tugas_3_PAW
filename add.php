<?php 
require 'function.php';

$nama= $_POST['nama'];
$nim= $_POST['nim'];
$alamat= $_POST['alamat'];

$sql="INSERT INTO `tbl_188` (`id`, `nama`, `nim`, `alamat`) VALUES (NULL, '$nama', '$nim', '$alamat');";
$query=mysqli_query($connect, $sql);
if(!$query){
	echo "
	<script>
		alert('Maaf! Data gagal dihapus');
		
	</script>
	";
}else{
	echo "
	<script>
		alert('Selamat! Data berhasil ditambahkan!');
		document.location.href='create.php';
	</script>";

}
 ?>

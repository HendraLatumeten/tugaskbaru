
<?php

	$database = new mysqli('localhost','root','','perpustakaan');
	if($database->connect_errno){
		echo"Database Tidak Dapat Terhubung";
	}
	$sql = "DELETE FROM buku WHERE kode_buku =('$_GET[kode_buku]')";
	$data=$database->query($sql);
	header("location:tugasOOP.php"); 
?>

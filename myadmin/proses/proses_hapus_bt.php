<?php 
	include '../koneksi.php';
	$id=$_GET['id'];
	mysqli_query($koneksi, "DELETE FROM bukutamu WHERE id_bt='$id'");
	header('location: ../beranda.php?page=bukutamu');
 ?>
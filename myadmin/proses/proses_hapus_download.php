<?php 
	include '../koneksi.php';
	$id=$_GET['id'];
	mysqli_query($koneksi, "DELETE FROM download WHERE id='$id'");
	header('location: ../beranda.php?page=download');
 ?>
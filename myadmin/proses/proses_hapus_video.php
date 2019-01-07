<?php 
	include '../koneksi.php';
	$id=$_GET['id'];
	mysqli_query($koneksi, "DELETE FROM video WHERE id='$id'");
	header('location: ../beranda.php?page=video');
 ?>
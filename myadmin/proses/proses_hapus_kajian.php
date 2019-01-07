<?php 
	include '../koneksi.php';
	$id=$_GET['id'];
	mysqli_query($koneksi, "DELETE FROM kajian WHERE id_kajian='$id'");
	header('location: ../beranda.php?page=kajian');
 ?>
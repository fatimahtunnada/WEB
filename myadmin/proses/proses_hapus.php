<?php 
	include '../koneksi.php';
	$id=$_GET['id'];
	mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita='$id'");
	header('location: ../beranda.php?page=berita');
 ?>
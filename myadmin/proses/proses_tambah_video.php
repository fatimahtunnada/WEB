<?php
	include '../koneksi.php';
	$judul=$_POST['judul'];
	$link=$_POST['link'];
	
	mysqli_query($koneksi, "INSERT INTO video (judul,link) VALUES ('$judul','$link')");
	header('location: ../beranda.php?page=video');
?>
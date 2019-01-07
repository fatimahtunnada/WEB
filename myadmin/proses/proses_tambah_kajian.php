<?php
	include '../koneksi.php';
	$tanggal=$_POST['tgl'];
	$judul=$_POST['judul_kajian'];
	$pembuat=$_POST['pembuat'];
	$tag=$_POST['kategori'];
	$isi=$_POST['isi_kajian'];
	mysqli_query($koneksi, "INSERT INTO kajian (tgl,judul_kajian,pembuat,kategori,isi_kajian) VALUES ('$tanggal', '$judul', '$pembuat', '$tag', '$isi')");
	header('location: ../beranda.php?page=kajian');
?>
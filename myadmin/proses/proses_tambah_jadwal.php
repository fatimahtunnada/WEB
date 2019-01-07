<?php
	include '../koneksi.php';
	$tanggal=$_POST['tanggal'];
	$hari=$_POST['hari'];
	$waktu=$_POST['waktu'];
	$tempat=$_POST['tempat'];
	$kegiatan=$_POST['kegiatan'];
	mysqli_query($koneksi, "INSERT INTO jadwal (hari,tanggal,waktu,tempat,kegiatan) VALUES ('$hari','$tanggal','$waktu','$tempat','$kegiatan')");
	header('location: ../beranda.php?page=jadwal');
?>
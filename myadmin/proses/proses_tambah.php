<?php
	include '../koneksi.php';
	$tanggal=$_POST['tanggal'];
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$tag=$_POST['tag'];
	$lokasi_file=$_FILES['foto']['tmp_name'];
	$nama_file=$_FILES['foto']['name'];
	$tipe_file=$_FILES['foto']['type'];
	move_uploaded_file($lokasi_file, "../img/$nama_file");
	mysqli_query($koneksi, "INSERT INTO berita (tanggal,judul,isi,tag,foto) VALUES ('$tanggal', '$judul', '$isi', '$tag', '$nama_file')");
	header('location: ../beranda.php?page=berita');
?>
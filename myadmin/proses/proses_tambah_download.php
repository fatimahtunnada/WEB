<?php
	include '../koneksi.php';
	$tanggal=$_POST['tanggal'];
	$judul=$_POST['judul'];
	$tag=$_POST['ket'];
	$filedata = addcslashes(fread(fopen($_FILES['file']['tmp_name'], 'r'), $_FILES['file']['size']));
	$lokasi_file=$_FILES['file']['tmp_name'];
	$nama_file=$_FILES['file']['name'];
	$path = "../files/".$nama_file;
	$tipe_file=$_FILES['file']['type'];
	move_uploaded_file($lokasi_file, $path);
	mysqli_query($koneksi, "INSERT INTO download (judul,tanggal,tag,filedata,filename) VALUES ('$judul', '$tanggal', '$tag', '$nama_file', '$nama_file')");
	header('location: ../beranda.php?page=download');
?>
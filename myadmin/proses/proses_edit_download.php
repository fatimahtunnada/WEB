<?php 
	include '../koneksi.php';
	$id=$_POST['id'];
	$tanggal=$_POST['tanggal'];
	$judul=$_POST['judul'];
	$tag=$_POST['ket'];
	$filedata = addcslashes(fread(fopen($_FILES['file']['tmp_name'], 'r'), $_FILES['file']['size']));
	$lokasi_file=$_FILES['file']['tmp_name'];
	$nama_file=$_FILES['file']['name'];
	$tipe_file=$_FILES['file']['type'];
	move_uploaded_file($lokasi_file, "../files/$nama_file");
	if(empty($nama_file)){
		mysqli_query($koneksi, "UPDATE download SET judul='$judul', tanggal='$tanggal', tag='$tag' WHERE id='$id'");
	}
	else{
		mysqli_query($koneksi, "UPDATE download SET judul='$judul', tanggal='$tanggal', tag='$tag', filedata='$nama_file', filename='$nama_file' WHERE id='$id'");
	}
	header('location:../beranda.php?page=download');
 ?>

<?php 
	include '../koneksi.php';
	$id=$_POST['id'];
	$tanggal=$_POST['tanggal'];
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$tag=$_POST['tag'];
	$lokasi_file=$_FILES['foto']['tmp_name'];
	$nama_file=$_FILES['foto']['name'];
	$tipe_file=$_FILES['foto']['type'];
	move_uploaded_file($lokasi_file, "../img/$nama_file");
	if(empty($nama_file)){
		mysqli_query($koneksi, "UPDATE berita SET tanggal='$tanggal', judul='$judul', isi='$isi', tag='$tag' WHERE id_berita='$id'");
	}
	else{
		mysqli_query($koneksi, "UPDATE berita SET tanggal='$tanggal', judul='$judul', isi='$isi', tag='$tag', foto='$nama_file' WHERE id_berita='$id'");
	}
	header('location:../beranda.php?page=berita');
 ?>

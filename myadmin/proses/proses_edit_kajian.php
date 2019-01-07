<?php 
	include '../koneksi.php';
	$id=$_POST['id'];
	$tanggal=$_POST['tanggal'];
	$judul=$_POST['judul'];
	$pembuat=$_POST['pembuat'];
	$tag=$_POST['kategori'];
	$isi=$_POST['isi'];
	mysqli_query($koneksi, "UPDATE kajian SET tgl='$tanggal', judul_kajian='$judul', pembuat='$pembuat', kategori='$tag', isi_kajian='$isi' WHERE id_kajian='$id'");
	header('location:../beranda.php?page=kajian');
 ?>

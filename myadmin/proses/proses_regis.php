<?php 
	include 'koneksi.php';
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	mysqli_query($koneksi, "INSERT INTO admin (username, password) VALUES ('$username', '$password')");
	header('location: ../index.php');
 ?>
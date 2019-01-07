
<?php
	include 'koneksi.php';
	session_start();
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$query=mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password' ");
	$num=mysqli_num_rows($query);
	if($num>0){
		$_SESSION['username']=$username;
		header('location: beranda.php');
	}
	else{
		header('location: index.php');
	}
?>
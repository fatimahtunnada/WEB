<?php
    include "mysqli_koneksi.php";
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    mysqli_query($con, "INSERT INTO pendaftar (nama,jenis_kelamin,agama,tanggal_lahir,telepon,email,alamat) VALUES ('$nama','$jk','$agama','$tgl_lahir','$telepon','$email','$alamat')");
    header("location:zawiyah.php");
?>
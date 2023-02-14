<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$user_nama = $_POST['user_nama'];
$user_kontak = $_POST['user_kontak'];
$user_alamat = $_POST['user_alamat'];
$user_foto = $_POST['user_foto'];

// update data ke database
mysqli_query($koneksi,"update user set user_nama='$user_nama', user_kontak='$user_kontak', user_alamat='$user_alamat', user_foto='$user_foto' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
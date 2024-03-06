<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['idbuku'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from buku WHERE idbuku='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
 
?>
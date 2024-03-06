<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['idpeminjaman'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from peminjaman WHERE idpeminjaman='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../peminjam.php");
 
?>
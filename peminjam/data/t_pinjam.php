<?php

// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$iduser             = $_POST['iduser'];
$idbuku             = $_POST['idbuku'];
$tgl_peminjaman     = $_POST['tgl_peminjaman'];
$tgl_pengembalian   = $_POST['tgl_pengembalian'];
$nama               = $_POST['nama'];
$status_peminjaman  = $_POST['status_peminjaman'];

mysqli_query($koneksi,"INSERT into peminjaman (iduser,idbuku,tgl_peminjaman,tgl_pengembalian,nama, status_peminjaman)
                    values('$iduser','$idbuku','$tgl_peminjaman','$tgl_pengembalian','$nama','$status_peminjaman')");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
 



?>
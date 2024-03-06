<?php 
// koneksi database
        include '../../koneksi/koneksi.php';
        
        // menangkap data yang di kirim dari form
        $idbuku = $_POST['idbuku'];
        $iduser = $_POST['iduser'];
        $nama = $_POST['nama'];
        $tgl_peminjaman = $_POST['tgl_peminjaman'];
        $tgl_pengembalian = $_POST['tgl_pengembalian'];
        $status_peminjaman = $_POST['status_peminjaman'];
                
        // menginput data ke database
        mysqli_query($koneksi,"INSERT into peminjaman (idbuku,iduser,nama,tgl_peminjaman,tgl_pengembalian,status_peminjaman)
                                values('$idbuku','$iduser','$nama','$tgl_peminjaman','$tgl_pengembalian','$status_peminjaman')");
        
        // mengalihkan halaman kembali ke index.php
        header("location:../peminjam.php");
        
?>
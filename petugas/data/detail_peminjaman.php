<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"style="margin-top: 3rem;">
        <div class="card">
            <div class="row m-4">
                <?php
                include '../../koneksi/koneksi.php';
                if (isset($_GET['idpeminjaman'])){
                    $idpeminjaman = $_GET['idpeminjaman'];
                }else{
                    die("Error, Data Tidak Ditemukan");
                }
                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE idpeminjaman='$idpeminjaman'");
                $result = mysqli_fetch_array($query);
                ?>
                <div class="col">
                <h2>Detail Buku</h2>
                <a href="../peminjam.php" class="btn btn-danger">Kembali</a>
                <hr>
                 <table>
                 <tr>
                        <td><h5>ID Peminjaman</h5></td>
                        <td><h5>: <?php echo $result['idpeminjaman'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>ID User</h5></td>
                        <td><h5>: <?php echo $result['iduser'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>ID Buku</h5></td>
                        <td><h5>: <?php echo $result['idbuku'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Nama Peminjam</h5></td>
                        <td><h5>: <?php echo $result['nama'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Tanggal Peminjaman</h5></td>
                        <td><h5>: <?php echo $result['tgl_peminjaman'];?> </h5></td>
                    </tr>
                    <tr>
                        <td><h5>Tanggal Pengembalian</h5></td>
                        <td><h5>: <?php echo $result['tgl_pengembalian'];?> </h5></td>
                    </tr>
                    <tr class="bg-warning text-white">
                        <td><h5>Status Peminjaman</h5></td>
                        <td><h5>: <?php echo $result['status_peminjaman'];?> </h5></td>
                    </tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
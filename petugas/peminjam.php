<?php
include 'layout/header.php';
?>

<div class="container">
    <div class="row" style="margin-top:1rem;">
    <div class="col">
       <h2>Data Peminjaman</h2>
       <a href="data/pinjam_buku.php" class="btn text-white mt-3" style="background: #D80032">Tambah Peminjaman</a>
       <table class="table my-2">
        <thead class="table table-danger">
            <tr>
            <th scope="col">ID Peminjaman</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Status Peminjaman</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php
        include '../koneksi/koneksi.php';
        
        $data=mysqli_query($koneksi, "SELECT * FROM peminjaman");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['idpeminjaman'];?></th>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['status_peminjaman'];?></td>
            <td>
                <a href="data/detail_peminjaman.php?idpeminjaman=<?php echo $d['idpeminjaman'];?>" class="btn text-white" style="background: #F28585">Detail</a>
                <a href="" class="btn btn-danger text-white">Edit</a>
                <a href="data/delete_pinjaman.php?idpeminjaman=<?php echo $d['idpeminjaman'];?>" class="btn text-white" style="background: #820300">Delete</a>
            </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
        </table>
        </div>
    </div>
</div>

<?php
include 'layout/footer.php';
?>
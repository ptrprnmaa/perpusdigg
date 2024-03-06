<?php
include 'layout/header.php';
?>

<div class="container"  style="margin-top: 2rem;">
        <h3>Daftar Buku</h3>
        <div class="row">
        <?php
            include '../koneksi/koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM buku Order by idbuku asc" );

            while ($d = mysqli_fetch_array($data)) {
              
            
        ?>
        <div class="card" style="width: 15rem;">
            <img src="../petugas/asset/sampul/<?php echo $d['foto'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $d ['judul']?></h5>
                <h6>Tahun Terbit : <?php echo $d ['tahunterbit']?></h6>
                <a href="data/detail.php?idbuku=<?php echo $d['idbuku'];?>" class="btn btn-warning text-white">Detail</a>
                <a href="data/pinjam_buku.php?idbuku=<?php echo $d['idbuku'];?>" class="btn btn-primary">Pinjam</a>
            </div>
        </div>
        <?php
            }
        ?>
     </div>
  </div>
        
<?php
include 'layout/footer.php';
?>
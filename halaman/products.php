
<div class="container">
    <div class="row">
        <?php 
        include 'koneksi.php';
        $sql = 'SELECT`id`,`Gambar`,`harga`,`nama`,`stock` FROM product';
        $data = mysqli_query($conn,$sql);

        while($b = mysqli_fetch_assoc($data)){
        ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-lg-0" style="width: 16rem;">
        <a class="text-decoration-none" href="index.php?page=details&id=<?php echo $b['id'];?>">
            <div class="card rounded shadow-sm border-1">
                <img class="card-img-top" src="<?php echo $b['Gambar'];?>">
            <div class="card-body">
            <p class="card-title text-truncate text-dark"><?php echo $b['nama'];?></p>
            <h6 class="card-title text-danger">Rp. <?php echo number_format($b['harga'],0,",",".");?></h6>
            <p class="card-subtitle text-dark">Stock : <?php echo $b['stock'];?></p>
            </div>
        </div>
        </div></a>
        <?php 
         }
        ?>
    </div>
</div>

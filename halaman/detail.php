<html>
    <div class="container">
        <div class="row">
            <?php 
            include 'koneksi.php';
            $id = $_GET['id'];
            $sql = "SELECT`id`,`Gambar`,`harga`,`nama`,`stock`,`deskripsi` FROM product WHERE id='$id'";
            $data = mysqli_query($conn,$sql);

            while($b = mysqli_fetch_assoc($data)){
            ?>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card rounded shadow-sm border-1">
                    <img src="<?php echo $b['Gambar'];?>">
                    <div class="card-body">
                        <p class="card-title"><?php echo $b['nama'];?></p>
                        <p class="card-title text-danger">Rp. <?php echo number_format($b['harga'],0,",",".");?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 card rounded shadow-sm border-1">
                <h5>Detail Produk</h5>
                <ul>
                    <li><?php echo $b['deskripsi'];?></li>
                </ul>
                <br>
                <a class="btn btn-lg btn-success text-white">Beli Sekarang</a>
            </div>
            <?php 
            }
            ?>
        </div>
    </div>
</html>
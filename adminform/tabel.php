<div class="container">
    <h1>Informasi Tentang Product</h1><br>
        <a class="btn btn-primary" href="input.php">Tambah Product</a><br>
        <hr>
    <table class="table table-bordered" border="`">
        <tr>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th>stock</th>
            <th>Hapus</th>
            <th>Edit</th>
        </tr>
        <?php
            include '../koneksi.php';
            $sql = "SELECT`id`,`nama`,`Gambar`,`harga`,`stock` FROM product";
            $data = mysqli_query($conn,$sql);
            while($b = mysqli_fetch_assoc($data)){
            ?>
        <tr>
            <td><?php echo $b['nama'];?></td>
            <td><img class="w-100" style="width: 20px; height: 50px;" src='<?php echo $b['Gambar'];?>'></td>
            <td><?php echo $b['harga'];?></td>
            <td><?php echo $b['stock'];?></td>
            <td><a class="btn btn-danger" href="hapusbrg.php?id=<?php echo $b['id'] ?>">Hapus</a></td>
            <td><a class="btn btn-success" href="editbrg.php?id=<?php echo $b['id'] ?>">Edit</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
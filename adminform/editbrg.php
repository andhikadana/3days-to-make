<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Barang</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <style>
        body{
            background-color: rgba(130,130,130,0.4);
        }
        .container{
            border-radius: 1%;
        }
    </style>
    </head>
    <body>
        <br><br>
        <div class="container bg-secondary text-white">
            <h1>Edit Barang</h1>
            <?php 
            include '../koneksi.php';
            $id = $_GET['id'];
            $sql = "SELECT`id`,`nama`,`Gambar`,`deskripsi`,`harga`,`stock` FROM product WHERE id='$id'";
            $data = mysqli_query($conn,$sql);
            while($b = mysqli_fetch_assoc($data)){
            ?>
            <form class="form-group" method="post" action="aksi.php">
                <label>Nama:</label><br>
                <input type="hidden" name="id" value="<?php echo $b['id'];?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $b['nama'];?>" required><br>
                <label>Gambar:</label><br>
                <input type="text" name="gambar" class="form-control" value="<?php echo $b['Gambar'];?>" required><br>
                <label>Deskripsi:</label><br>
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $b['deskripsi'];?>" required><br>
                <label>harga:</label><br>
                <input type="number" name="harga" class="form-control" value="<?php echo $b['harga'];?>" required><br>
                <label>stock:</label><br>
                <input type="number" name="stock" class="form-control" value="<?php echo $b['stock'];?>" required><br>
                <input type="submit" class="btn btn-success btn-lg" value="Submit"><br>
            </form>
            <?php
            }
            ?>
        </div>
    </body>
</html>
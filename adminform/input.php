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
            <h1>Tambah Barang</h1>
            <form class="form-group" method="post" action="aksi.php">
                <label>Nama:</label><br>
                <input type="text" name="nama" class="form-control" placeholder="Masukan nama product" required><br>
                <label>Gambar:</label><br>
                <input type="text" name="gambar" class="form-control" placeholder="Masukan Gambar product" required><br>
                <label>Deskripsi:</label><br>
                <input type="text" name="deskripsi" class="form-control" placeholder="Masukan deskripsi product" required><br>
                <label>harga:</label><br>
                <input type="number" name="harga" class="form-control" placeholder="Masukan harga product" required><br>
                <label>stock:</label><br>
                <input type="number" name="stock" class="form-control" placeholder="Masukan stok product" required><br>
                <input type="submit" class="btn btn-success btn-lg" value="Submit"><br>
            </form>
        </div>
    </body>
</html>
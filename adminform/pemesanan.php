<div class="container">
    <h1>Informasi Pemesanan Barang</h1><br>
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
            $sql = "SELECT tb_pemesanan.id_pemesanan, tb_pemesanan.penerima, tb_pemesanan.kuantitas,
            tb_pemesanan.alamat, tb_pemesanan.no_hp, tb_pemesanan.tanggal, tb_barang.nama tb_user.nama,
            tb_checkout.pembayaran
            FROM tb_pemesanan
            INNER JOIN tb_barang, tb_user, tb_checkout, tb_pembayaran
            ON tb_pemesanan.id_barang=tb_barang.id_barang, tb_pemesanan.id_user=tb_user.id_user,
            tb_pemesanan.id_checkout=tb_checkout.id_checkout";
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
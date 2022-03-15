<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$gambar = $_POST['gambar'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];

$sql = "INSERT INTO tb_barang(`nama`,`gambar`,`deskripsi`,`harga`,`stock`) VALUES('$nama','$gambar','$deskripsi','$harga','$stock')";

mysqli_query($user,$sql);

header('location: admin.php?page=tabel');
?>
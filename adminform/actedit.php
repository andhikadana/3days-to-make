<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$gambar = $_POST['Gambar'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];

$sql = "UPDATE product SET id='$id', nama='$nama', Gambar='$gambar', deskripsi='$deskripsi', harga='$harga', stock='$stock' WHERE id='$id'";

mysqli_query($conn,$sql);

header('location: admin.php?page=tabel');
?>
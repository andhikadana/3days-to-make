<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass  = md5($_POST['password']);

$sql = "INSERT INTO tb_user(`nama`,`username`,`password`,`email`) VALUES('$nama','$username','$pass','$email')";
mysqli_query($user,$sql);

header('location: ../index.php?page=login');
?>


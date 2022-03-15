<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = md5($_POST['password']);
$status = 'admin';

$sql = "INSERT INTO tb_user(`nama`,`username`,`email`,`password`,`status`) VALUES('$nama','$username','$email','$pass','$status')";

mysqli_query($user,$sql);

header('Location: admin.php?page=addadmin')
?>
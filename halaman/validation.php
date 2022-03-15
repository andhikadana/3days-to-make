<?php
session_start();
include '../koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass  = md5($_POST['password']);

$login = mysqli_query($user,"select * from tb_user WHERE username='$username' and email='$email' and password='$pass'");

$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    if($data['status'] == "admin"){

        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin";
        echo $data['id'];
        header('location: ../adminform/admin.php');

    }else if($data['status'] == ""){

        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header('Location: ../index.php');

    }else{
    $_SESSION['belum_login'];
    header('Location: login.php?pesan=gagal');
    }
}else{
    $_SESSION['belum_login'];
    header('Location: login.php?pesan=gagal');
}
?>
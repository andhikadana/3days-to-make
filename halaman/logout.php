<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Logout</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <h1>Anda Berhasil Logout</h1>
            <?php 
            if($_SESSION['status']=="login"){
                session_destroy();
                $_SESSION['status']=="belum_login"
            ?>
            <a class="btn btn-primary btn-lg" href="../index.php?page=home">Kembali Ke halaman</a>
            <?php
            }
            ?>
        </div>
    </body>
</html>
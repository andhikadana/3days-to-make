<?php
        session_start();

        if($_SESSION['status'] == "belum_login"){
            header('Location: ../index.php');
        }
        ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-lg">
    <a href="" class="navbar-brand">Halaman Admin</a>

    <div class="navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="admin.php?page=dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=tabel">Tabel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=addadmin">Tambah Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=pemesanan">Pemesanan</a>
            </li>
        </ul>
    </div>
    </nav>
    <?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
            case 'dashboard';
            include 'dash.php';
            break;
            case 'tabel';
            include 'tabel.php';
            break;
            case 'addadmin';
            include 'addadmin.php';
            break;
            case 'pemesanan';
            include 'pemesanan.php';
            break;
            default:
            echo 'halaman tidak ada';
            break;
        }
    }else{
        include 'dash.php';
    }

    ?>
    </body>
</html>
<!DOCTYPE html>
<?php 
    session_start();
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online-Shop</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-lg">
    <a href="" class="navbar-brand">Online-Shop</a>

    <div class="navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php?page=home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=products">Products</a>
            </li>
            <?php
            if(isset($_SESSION['status']) == 'login') {  
            ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=pembayaran">pembayaran</a>
            </li>
            <?php }?>
        </ul>
        
        <form class="d-flex">
            <input class="form-control" type="search" name="search" placeholder="Search">
            <button class="btn btn-success">Search</button>
        </form>
    </div>
    <?php 
    if(isset($_SESSION['status']) == 'login'){
    ?>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <?php 
                $nama = $_SESSION['username'];
                $sql = "SELECT * FROM tb_user  WHERE `username`='$nama'";
                $dt = mysqli_query($user,$sql); 
                while($b = mysqli_fetch_assoc($dt)){
                ?>
                <a class="nav-link" href="halaman/account.php?id=<?php echo $b['id_user'];?>"><span class="icon-person"></span>Account</a>
                <?php }?>
            </li>
        </ul>
    </div>
    <?php
    }?>
    <?php if(isset($_SESSION['status']) == ''){?>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="halaman/register.php"><span class="icon-person"></span>Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="halaman/login.php">Login</a>
            </li>
        </ul>
    </div>
    <?php
        }
    ?>
    </nav>

    <?php
    if(isset($_GET['page']) ){
        $page = $_GET['page'];

        switch ($page){
            case 'home';
            include 'halaman/home.php';
            break;
            case 'products';
            include 'halaman/products.php';
            break;
            case 'pembayaran';
            include 'halaman/pembayaran.php';
            break;
            case 'details';
            include 'halaman/detail.php';
            break;
            default:
            echo 'Halaman Tidak Ada';
            break;
        }
    }else{
        include 'halaman/home.php';
    }

    ?>
</body>
</html>
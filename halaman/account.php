<!DOCTYPE html>
<html>
    <head>
        <title>Account</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body>
        <div class="container-sm"><br><br>
            <div class="card rounded shadow-sm border-1 bg-success">
            <h1>Informasi Tentang Akun Anda</h1><br>
                    <?php
                    session_start(); 
                    include '../koneksi.php';
                    $id = $_GET['id'];
                    if($_SESSION['status'] == "belum_login"){
                        header('location: login.php');
                    }else{
                    if($_SESSION['status'] == "login"){
                    $sql ="SELECT`id_user`,`nama`,`email` FROM tb_user WHERE `id_user`='$id'";
                    $data = mysqli_query($user,$sql);
                    while($b = mysqli_fetch_assoc($data)){
                    ?>
                    <label name="nama" class="text-white">Nama:</label>
                    <h6  name="nama"><?php echo $b['nama'];?></h6><br><br>
                    <label name="emal" class="text-white">Email:</label>
                    <h6 name="email"><?php echo $b['email'];?></h6>
                    <?php }}}
                    ?>
                    <a class="btn btn-lg btn-danger" href="logout.php">Logout</a>
                </div>
        </div>
    </body>
</html>
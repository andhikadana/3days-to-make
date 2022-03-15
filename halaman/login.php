<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
    <style>
        body{
            background-color: rgba(130,130,130,0.4);
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <div class="container bg-secondary text-white">
        <h1 align="center">Login</h1>
        <?php
        if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<p class='alert text-warning'>Username Email dan Password Salah!</p>";
        }else if($_GET['pesan'] == "logout"){
            $_SESSION['status'] = '';
            echo "<p class='alert text-warning'>Anda berhasil logout!</p>";
        }else if($_GET['pesan'] == "belum_login"){
            $_SESSION['status'] = '';
            echo "<p class='alert text-warning'>Anda Harus login dulu!</p>";
        }
    }
    ?>
    <form class="form-group" method="post" action="validation.php">
        <label>Nama</label><br>
        <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" required><br>
        <label>Username</label><br>
        <input type="text" class="form-control" placeholder="Masukan username" name="username" required><br>
        <label>Email</label><br>
        <input type="email" class="form-control" placeholder="Masukan Email" name="email" required><br>
        <label>Password</label><br>
        <input type="password" class="form-control" placeholder="Masukan password" min="5" max="10" name="password" required><br>
        <button type="submit" class="btn btn-lg bg-success text-white">SUBMIT</button><br><br>
    </form>
    </div>
</body>
</html>
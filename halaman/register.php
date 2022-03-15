<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
</head>
    <div class="container bg-secondary text-white">
        <h1 align="center">Register</h1>
    <form class="form-group" method="post" action="halaman/tambahuser.php">
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
</html>
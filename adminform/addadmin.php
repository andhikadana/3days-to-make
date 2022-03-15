<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <style>
            body{
                background-color: rgba(0,0,0,0.4);
            }
        </style>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="card rounded border-1 shadow-sm"><br>
            <h2>Halaman Tambah Admin</h2><br>
            <form class="form-group" method="post" action="actadd.php">
            <label>Nama</label><br>
            <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" required><br>
            <label>Username</label><br>
            <input type="text" class="form-control" placeholder="Masukan username" name="username" required><br>
            <label>Email</label><br>
            <input type="email" class="form-control" placeholder="Masukan Email" name="email" required><br>
            <label>Password</label><br>
            <input type="password" class="form-control" placeholder="Masukan password" min="5" max="10" name="password" required><br>
            <button type="submit" class="btn btn-lg bg-success text-white">SUBMIT</button><br><br>
            </form><br>
            </div>
        </div>
    </body>
</html>
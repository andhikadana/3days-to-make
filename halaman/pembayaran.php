
<?php

if($_SESSION['status'] != "login"){
    header("Location: halaman/login.php?pesan=belum_login");
}
if($_SESSION['status'] == "login"){


?>
<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
</head>
<h1>Ini page pembayaran</h1>
</html>
<?php }?>
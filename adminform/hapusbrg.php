<?php

$id = $_GET['id'];

$sql = "DELETE FROM product WHERE id='$id'";

mysqli_query($conn,$sql);

header("location: admin.php?page=tabel");

?>
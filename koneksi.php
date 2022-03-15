<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$db       = 'marketplace';
$tbu      = 'online_shop';

$conn = mysqli_connect($hostname,$username,$password,$db);

$user = mysqli_connect($hostname,$username,$password,$tbu);
?>
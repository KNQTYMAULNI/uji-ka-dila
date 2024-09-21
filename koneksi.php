<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "perportopolio";

$koneksi =new mysqli($servername, $username, $password, $database);

if ($koneksi->connect_error){
    die("gagal terhubung". $koneksi->connect_error);

}

// echo "berhasil terhubung";
?>



<?php
include 'koneksi.php';

$database = "perportopolio";

$create = "CREATE DATABASE $database";

if($koneksi->query($create) === true) {
    echo "database $database berhasil dibuat";
}else{
    echo "gagal membuat database";
}

$koneksi->close();

?>
    
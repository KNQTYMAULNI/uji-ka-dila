<?php

include 'koneksi.php';

$create = "CREATE TABLE bimbel (
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(255) NOT NULL,
umur VARCHAR(255) NOT NULL,
jenis_kelamin VARCHAR(255) NOT NULL,
nomor_telepon VARCHAR(255) NOT NULL,
alamat VARCHAR (255) NOT NULL

)";

if($koneksi->query($create) === true){
    echo "Table bimbel berhasil dibuat";
}else{
    echo "Gagal membuat table";
}

$koneksi->close();
?>
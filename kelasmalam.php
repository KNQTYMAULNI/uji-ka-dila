<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Bimbel</title>
</head>
<body>
    <h1 style="text-align: center; color: red; font-weight: 600; font">Kelas malam</h1>


    <table border="1">
        <tr style="background-color: pink; color: black; 700; font-family:Verdana, Geneva, Tahoma, sans-serif;">
            <th width="5%">id</th>
            <th>Nomor bootcamp</th>
            <th>nama peserta</th>
            <th>nama bootcamp</th>
            <th>jadwal kelas</th>
            <th>nomor telepon</th>
        </tr>

        <?php
        $data = mysqli_query($koneksi,  "SELECT * FROM detail where jadwal_kelas like 'malam'");
        while($bimbel = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php print $bimbel['id'] ?></td>
                <td><?php print $bimbel['nomor_bootcamp'] ?></td>
                <td><?php print $bimbel['nama_peserta'] ?></td>
                <td><?php print $bimbel['nama_bootcamp'] ?></td>
                <td><?php print $bimbel['jadwal_kelas'] ?></td>
                <td><?php print $bimbel['no_telepon'] ?></td>
            
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>

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
    <h1 style="text-align: center; color: red; font-weight: 600; font">Data Laki-laki</h1>

    <table border="1">
        <tr style="background-color: aquamarine; color: black; 700; font-family:Verdana, Geneva, Tahoma, sans-serif;">
            <th width="5%">No</th>
            <th>Nama</th>
            <th>umur</th>
            <th>jenis kelamin</th>
            <th>nomor telepon</th>
            <th>Alamat</th>
            
        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM bimbel where jenis_kelamin like 'laki-laki'");
        while($bimbel = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php print $bimbel['id'] ?></td>
                <td><?php print $bimbel['nama'] ?></td>
                <td><?php print $bimbel['umur'] ?></td>
                <td><?php print $bimbel['jenis_kelamin'] ?></td>
                <td><?php print $bimbel['nomor_telepon'] ?></td>
                <td><?php print $bimbel['alamat'] ?></td>

            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
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
    <h1 style="text-align: center; color: red; font-weight: 600; font">Data Penerimaan</h1>

    <a href="from.php">Tambah Data Peserta Bimbel</a>
    <a href="datalaki.php">Data laki-laki</a>
    <a href="dataWanita.php">Data perempuan</a>
    <table border="1">
        <tr style="background-color: aquamarine; color: black; 700; font-family:Verdana, Geneva, Tahoma, sans-serif;">
            <th width="5%">No</th>
            <th>Nama</th>
            <th>umur</th>
            <th>jenis kelamin</th>
            <th>nomor telepon</th>
            <th>Alamat</th>
            <th>option</th>
        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM bimbel");
        while($bimbel = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php print $bimbel['id'] ?></td>
                <td><?php print $bimbel['nama'] ?></td>
                <td><?php print $bimbel['umur'] ?></td>
                <td><?php print $bimbel['jenis_kelamin'] ?></td>
                <td><?php print $bimbel['nomor_telepon'] ?></td>
                <td><?php print $bimbel['alamat'] ?></td>
                <td>
                    <a href="fromedit.php?id=<?php print $bimbel['id'] ?>">edit</a>
                    <a href="detail.php?id=<?php print $bimbel['id'] ?>">Detail</a>
                    <a href="hapus.php?id=<?php print $bimbel['id'] ?>" onclick="return confirm('Y4kin m4u h4pus d4t4')">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
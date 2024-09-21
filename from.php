<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Pendaftaran Bimbel</h1>

<!-- di tag from ini WAJIB memakai atribut (action & method) -->
    <form action="create.php" method="post">
        
<!-- di bagian name (input) itu harus sama dengan field yang sudah kita buat -->
        <label>nama</label>
        <br>
        <input type="text" name="nama">
        <br>

        <label>umur</label>
        <br>
        <input type="number" name="umur">
        <br>

        <label>jenis kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin">
        <br>

        <label>nomor telepon</label>
        <br>
        <input type="number" name="nomor_telepon">
        <br>

        <label>alamat</label>
        <br>
        <textarea name="alamat"></textarea>
        <br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
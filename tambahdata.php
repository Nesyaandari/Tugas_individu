<?php
require 'function.php';

if (isset($_POST["submit"])) {

    if(tambahmahasiswa($_POST)>0);
    {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'datamahasiswa.php';
              </script>";
    }
    else  {
        echo "<script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'tambahdata.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required><br>

        <label for="nohp">No. Hp:</label>
        <input type="text" name="nohp" id="nohp" required><br>

        <button type="submit" name="submit">Tambah</button>
    </form>
    
</body>
</html>
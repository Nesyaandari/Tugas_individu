<?php
require 'function.php';
$rows = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <a href="tambahdata.php">
        <button style="margin-bottom:12px; background-color:red;">Tambah Data</button>
    </a>

    <table border="1" cellpadding="10" cellspacing="0">    
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>No. Hp</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; foreach ($rows as $mhs) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><img src="images/<?= $mhs["foto"] ?>" alt="Foto" width="60"></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
                <td><?= $mhs['nohp']; ?></td>
                <td>
                    <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Yakin ingin menghapus?');">
                        <button style="background-color: pink;">Hapus</button>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

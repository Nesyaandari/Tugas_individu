<?php

require 'function.php';

$query = "SELECT * FROM mahasiswa";

$rows = query($query);




//$mhs = mysqli_fetch_assoc ($result); 

// Ambil satu baris data sebagai array numerik
//ambil data(fetch) dari result    
// mysqli_fetch_row () mengembalikan data sebagai array asosiatif
// mysqli_fetch_assoc () mengembalikan data sebagai array numerik
// mysqli_fetch_array () mengembalikan data sebagai array asosiatif dan numerik
// mysqli_fetch_object () mengembalikan data sebagai objek

/*while ($mhs = mysqli_fetch_assoc($result)) {
    // Proses data mahasiswa di sini, misalnya simpan ke array atau tampilkan
    // Contoh: echo $mhs['nama'] . "<br>";
    var_dump($mhs ["nama"]);
}*/

 // Debugging: Tampilkan hasil query  
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">    
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>No. Hp</th>
        </tr>
        <?php
        foreach ($rows as $mhs) { ?>
            <tr>
                <td><?php echo $mhs['id']; ?></td>
                <td><img src="images/<?= $mhs["foto"] ?>" alt="Foto" width="60" /></td>
                <td><?php echo $mhs['nama']; ?></td>
                <td><?php echo $mhs['nim']; ?></td>
                <td><?php echo $mhs['jurusan']; ?></td>
                <td><?php echo $mhs['nohp']; ?></td>
            </tr>
        
          
            <?php } ?>
        <!-- Tambahkan data mahasiswa lainnya sesuai kebutuhan -->
    </table>
</body>
</html>
<?php
$koneksi = mysqli_connect("localhost:3307", "root", "", "pemograman_web");

if(!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahmahasiswa($data) {
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $nohp = htmlspecialchars($data["nohp"]);

    // Proses upload foto
    $namaFile = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    $folderTujuan = 'images/';

    // Pindahkan file
    $namaBaru = uniqid() . '_' . $namaFile;
    move_uploaded_file($tmpName, $folderTujuan . $namaBaru);

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, nohp, foto)
              VALUES ('$nama', '$nim', '$jurusan', '$nohp', '$namaBaru')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapusdata($id) {
    global $koneksi;

    // Hapus file foto juga
    $data = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
    $foto = $data['foto'];
    if (file_exists("images/$foto")) {
        unlink("images/$foto");
    }

    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
?>

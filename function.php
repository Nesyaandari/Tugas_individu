<?php
$koneksi = mysqli_connect("localhost:3307", "root", "", "pemograman_web");

if(!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    // echo "Koneksi berhasil"; // Sebaiknya di-comment agar tidak mengganggu tampilan HTML
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
?>
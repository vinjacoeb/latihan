<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asalKampus = $_POST['asalKampus'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO k5 (nama, alamat, jenis_kelamin, agama, asalKampus, jurusan) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$asalKampus', '$jurusan')";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirim dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asalKampus = $_POST['asalKampus'];
    $jurusan = $_POST['jurusan'];

    $sql = "UPDATE k5 SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', asalKampus='$asalKampus', jurusan='$jurusan' WHERE id='$id'";

    if ($koneksi->query($sql) === TRUE) {
        $koneksi->close();
        echo "<script>window.location.href = 'index.php';</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

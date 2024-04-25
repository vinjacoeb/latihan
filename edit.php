<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
            color: #212529;
        }

        .form-control {
            border-radius: 0;
        }

        .btn-primary, .btn-danger {
            border-radius: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="my-4 text-center">Edit Anggota</h2>
        <?php
        include 'koneksi.php';

        $id = $_GET['id'];

        $sql = "SELECT * FROM k5 WHERE id = '$id'";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="proses_edit.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="P" <?php if($row['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
                    <option value="L" <?php if($row['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <select class="form-select" id="agama" name="agama" required>
                    <option value="Kristen" <?php if($row['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                    <option value="Katholik" <?php if($row['agama'] == 'Katholik') echo 'selected'; ?>>Katholik</option>
                    <option value="Islam" <?php if($row['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Hindu" <?php if($row['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Konghuchu" <?php if($row['agama'] == 'Konghuchu') echo 'selected'; ?>>Konghuchu</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="asalKampus" class="form-label">Asal Kampus</label>
                <input type="text" class="form-control" id="asalKampus" name="asalKampus" value="<?php echo $row['asalKampus']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $row['jurusan']; ?>" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-danger">Batal</a>
        </form>
        <?php
        } else {
            echo "<div class='alert alert-danger'>Data tidak ditemukan.</div>";
        }

        $koneksi->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

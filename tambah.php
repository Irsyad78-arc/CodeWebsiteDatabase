<?php include "koneksi.php";

if(isset($_POST['simpan'])){
    mysqli_query($conn, "INSERT INTO tabel_siswa (nama, kelas, umur) VALUES
        ('$_POST[nama]', '$_POST[kelas]', '$_POST[umur]')");
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Data</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>➕ Tambah Siswa</h2>

<form method="POST">
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="umur" class="form-control" required>
    </div>

    <button class="btn btn-success" name="simpan">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>

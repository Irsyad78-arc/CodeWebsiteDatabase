<?php 
include "koneksi.php";
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tabel_siswa WHERE id='$_GET[id]'"));

if(isset($_POST['update'])){
    mysqli_query($conn, "UPDATE tabel_siswa SET 
        nama='$_POST[nama]', kelas='$_POST[kelas]', umur='$_POST[umur]' 
        WHERE id='$_GET[id]'");
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>✏ Edit Siswa</h2>

<form method="POST">
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Kelas</label>
        <input type="text" name="kelas" value="<?= $data['kelas']; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="umur" value="<?= $data['umur']; ?>" class="form-control">
    </div>

    <button class="btn btn-warning" name="update">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>

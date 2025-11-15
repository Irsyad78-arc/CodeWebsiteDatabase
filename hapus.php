<?php
include "koneksi.php";
mysqli_query($conn, "DELETE FROM tabel_siswa WHERE id='$_GET[id]'");
header("Location:index.php");
?>

<?php 
include '../koneksi.php';
$nisn = $_GET['nisn'];
mysqli_query($conn, "DELETE FROM siswa WHERE nisn='$nisn'")or die(mysqli_error());
 
header("location:index.php?pesan=hapus");
?>
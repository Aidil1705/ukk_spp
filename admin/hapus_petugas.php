<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas='$id'")or die(mysqli_error());
 
header("location:petugas.php?pesan=hapus");
?>
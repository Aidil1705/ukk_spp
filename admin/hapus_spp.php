<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM spp WHERE id_spp='$id'")or die(mysqli_error());
 
header("location:spp.php?pesan=hapus");
?>
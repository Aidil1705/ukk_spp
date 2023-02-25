
<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran='$id'")or die(mysqli_error());
 
header("location:data_spp.php?pesan=hapus");
?>
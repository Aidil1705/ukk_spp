
<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas='$id'")or die(mysqli_error());
 
header("location:kelas.php?pesan=hapus");
?>
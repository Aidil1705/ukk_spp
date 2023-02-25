
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
    .container{
        width: 250px;
    }
</style>
<?php 
	include "../koneksi.php";

	if (isset($_POST['Simpan'])) {
		$nisn = $_POST['nisn'];
		$nis = $_POST['nis'];
        $nama = $_POST['nama'];
		$id_kelas = $_POST['id_kelas'];
		mysqli_query($conn, "UPDATE siswa SET nisn = '$nisn', nis = '$nis', nama = '$nama', id_kelas = '$id_kelas'  WHERE siswa.nisn = '$nisn'");
		header('Location: index.php');
	}



	$nisn = $_GET["nisn"];
        
	$qry = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn = '$nisn'");
	$nomor = 1;
    
	$data = mysqli_fetch_assoc($qry);
	?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <div class="container">
	<h3>Edit siswa</h3>
 
	<form action="" method="post" >		

                <div class="form-group">
                    <label for=""> Nama Siswa </label>
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control">
                    </div>
							
			<br>
                <div class="form-group">
                    <label for=""> NISN </label>
                    <input type="text" name="nisn" value="<?php echo $data['nisn'] ?>" class="form-control">
                </div>				
				<br>
                <div class="form-group">
                    <label for=""> NIS </label>
                    <input type="text" name="nis" value="<?php echo $data['nis'] ?>" class="form-control">
                </div>				
				<br>
                <div class="form-group">
                    <label for=""> Level :  </label>
                    
                    <select name="id_kelas" id="" class="form-control">
                    <?php 
                    include "../koneksi.php";
                    $qry = mysqli_query($conn, "SELECT * FROM kelas");
                    while($isi = mysqli_fetch_array($qry)){
                        ?>
                        <option value="<?= $isi['id_kelas'] ?>"> <?= $isi['nama_kelas'] ?></option>
                    <?php } ?>
                    </select>
                    
                </div>				
				<br>
				<button type="submit" class="button1" name="Simpan">Edit Petugas</button>								
	
	</form>
    </div>
</body>
</html>
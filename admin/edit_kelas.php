
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
		$id = $_POST['id'];
		$nama_kelas = $_POST['nama_kelas'];
		$kopetensi_keahlian = $_POST['kopetensi_keahlian'];
		mysqli_query($conn, "UPDATE kelas SET nama_kelas = '$nama_kelas', kopetensi_keahlian = '$kopetensi_keahlian' WHERE id_kelas = '$id'");
		header('Location: kelas.php');
	}



	$id = $_GET["id"];
        
	$qry = mysqli_query($conn, "SELECT * FROM kelas WHERE id_kelas = '$id'");
	$nomor = 1;
    
	$data = mysqli_fetch_assoc($qry);
	?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <div class="container">
	<h3>Edit Kelas</h3>
 
	
	<form action="" method="post" >		
		
            
                    <div class="form-group">
                    <label for=""> Kelas </label>
                        <input type="hidden" name="id" value="<?php echo $data['id_kelas'] ?>">
                        <input type="text" name="nama_kelas" value="<?php echo $data['nama_kelas'] ?>" class="form-control">
                    </div>
							
			<br>
                    <div class="form-group">
                        <label for=""> Kopetensi </label>
                        <input type="text" name="kopetensi_keahlian" value="<?php echo $data['kopetensi_keahlian'] ?>" class="form-control">
                    </div>				
                
                    <br>
                    <button type="submit" class="button1" name="Simpan">Edit Kelas</button>				
							
	
	</form>
    </div>
</body>
</html>

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
		$tahun = $_POST['tahun'];
		$nominal = $_POST['nominal'];
		mysqli_query($conn, "UPDATE spp SET tahun = '$tahun', nominal = '$nominal' WHERE id_spp = '$id'");
		header('Location: spp.php');
	}



	$id = $_GET["id"];
        
	$qry = mysqli_query($conn, "SELECT * FROM spp WHERE id_spp = '$id'");
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
                    <label for=""> Tahun </label>
                        <input type="hidden" name="id" value="<?php echo $data['id_spp'] ?>">
                        <input type="text" name="tahun" value="<?php echo $data['tahun'] ?>" class="form-control">
                    </div>
							
			<br>
                    <div class="form-group">
                        <label for=""> Nominal </label>
                        <input type="text" name="nominal" value="<?php echo $data['nominal'] ?>" class="form-control">
                    </div>				
                
                    <br>
                    <button type="submit" class="button1" name="Simpan">Edit SPP</button>				
							
	
	</form>
    </div>
</body>
</html>
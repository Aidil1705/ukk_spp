
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
		$nama_petugas = $_POST['nama_petugas'];
        $username = $_POST['username'];
		$password = $_POST['password'];
        $level = $_POST['level'];
		mysqli_query($conn, "UPDATE petugas SET nama_petugas = '$nama_petugas', username = '$username', password = '$password', level = '$level'  WHERE id_petugas = '$id'");
		header('Location: petugas.php');
	}



	$id = $_GET["id"];
        
	$qry = mysqli_query($conn, "SELECT * FROM petugas WHERE id_petugas = '$id'");
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
                    <label for=""> Nama Petugas </label>
					<input type="hidden" name="id" value="<?php echo $data['id_petugas'] ?>">
					<input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>" class="form-control">
                    </div>
							
			<br>
                <div class="form-group">
                    <label for=""> Username </label>
                    <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control">
                </div>				
				<br>
                <div class="form-group">
                    <label for=""> Password </label>
                    <input type="text" name="password" value="<?php echo $data['password'] ?>" class="form-control">
                </div>				
				<br>
                <div class="form-group">
                    <label for=""> Level :  </label>
                    <input type="radio" name="level" value="admin" >Admin
                    <input type="radio" name="level" value="petugas" >Petugas
                </div>				
				<br>
				<button type="submit" class="button1" name="Simpan">Edit Petugas</button>								
	
	</form>
    </div>
</body>
</html>
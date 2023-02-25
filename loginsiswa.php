<?php
    session_start();
    include "koneksi.php";

    if(isset($_POST['masuk'])){
        $nama = $_POST['nama'];
        $nisn = $_POST['nisn'];
        $qry = mysqli_query($conn, "SELECT * FROM siswa WHERE nama = '$nama' AND nisn= '$nisn'");
    if(mysqli_num_rows($qry) > 0){
        

        $data = mysqli_fetch_assoc($qry);
        if($data['nisn']=="$nisn"){
            $_SESSION['nama'] = $nama;
            $_SESSION['nisn'] = "$nisn";
            header("location:siswa/index.php");
        }else{
            header("location:loginsiswa.php?pesan=gagal");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color: #374e7c;
        }
        .border{
            border: 1px solid #374e7c ;
            width: 250px;
            height: 400px;
            margin-top : 100px;
            background-color: white;
            border-radius: 50px;
        }
        .profil {
            border-radius : 50%;
        }

    </style>
    <title>Login</title>
</head>
<body>
    <center>
    <div class="border">
        <br>
        <img name=" profil" src="img/profil.jpg" width="75px", height="75px">
        <br>
        
        <table>
        <form action="" method="POST">
            <tr>
                <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td><input type="tetx" name="nisn" placeholder="Masukkan NISN"></td>
            </tr>
            <tr>
                <td> <button class="tombol" name="masuk" > Log in</button></td>
            </tr>
        </form>
        </table>
        <a href="index.php"><p>Log In Sebagai Petugas</p></a>
    </div>
    </center>
</body>
</html>
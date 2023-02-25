<?php
    session_start();
    include "koneksi.php";

    if(isset($_POST['masuk'])){
        $username = mysqli_real_escape_string ($conn ,$_POST['username']);
        $password = mysqli_real_escape_string ($conn ,$_POST['password']);
        $qry = mysqli_query($conn, "SELECT * FROM petugas WHERE petugas.username = '$username' AND petugas.password = '$password'");
    if(mysqli_num_rows($qry) > 0){
        

        $data = mysqli_fetch_assoc($qry);
        if($data['level']=="admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:admin/index.php");

        }else if($data['level']=="petugas"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "petugas";
            header("location:petugas/index.php");

        }else{
            header("location:index.php?pesan=gagal");
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
                <td><input type="text" name="username" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td> <button class="tombol" name="masuk" > Log in</button></td>
            </tr>
        </form>
        </table>
        <a href="loginsiswa.php"><p>Log In Sebagai siswa</p></a>
    </div>
    </center>
</body>
</html>
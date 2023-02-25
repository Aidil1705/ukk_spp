
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #374e7c;
            border-radius: 100px ;
            padding-left: 15px;
            padding-right: 15px;
            margin-left: 100px;
        }
        .button1:hover{
            background-color: #374e7c ;
            color: white;
        }

    </style>
    <title>admin-tambah_SPP</title>
</head>
<body>
    <h1>Tambah Petugas</h1>
    <form action="" method="POST">
    <table>
    <tr>
        <td>Nama Petugas</td>
        <td> : <input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Username</td>
        <td> : <input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td> : <input type="text" name="password"></td>
    </tr>
    <tr>
        <td>Level</td>
        <td> :  <input type="radio" name="level" Value="admin">Admin
                <input type="radio" name="level" Value="petugas">Petugas
        </td>
    </tr>

    <tr>
        <td></td>
        <td><button  class="button1" type="submit" name="tambah">Tambah</button></td>
    </tr>
</table>
    </form>
    <?php
        include "../koneksi.php";

        if(isset($_POST['tambah'])){
            mysqli_query($conn, "INSERT INTO petugas SET
            nama_petugas = '$_POST[nama]',
            username = '$_POST[username]',
            password = '$_POST[password]',
            level = '$_POST[level]'");
            header("location:petugas.php");
        }



    ?>
</body>
</html>
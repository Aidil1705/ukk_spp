
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        table{
            margin-left : 235px;
        }
    </style>
    <title>Admin-data_petugas</title>
</head>
<body>
    <?php
    include "headeradm.php ";
    ?>
    <br>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "../koneksi.php";
            $qry = mysqli_query($conn, "SELECT * FROM petugas ");
            $nomor = 1;
            while($data = mysqli_fetch_array($qry)){


        ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['nama_petugas'] ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['level'] ?></td>
            <td>
                <a href="edit_petugas.php?id=<?=$data['id_petugas']?>">Ubah</a>/
                <a href="hapus_petugas.php?id=<?=$data['id_petugas']?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <div class="plus">
    <a href="tambah_petugas.php"><button class="button1" >Tambah Petugas</button></a>
    </div>
</body>
</html>
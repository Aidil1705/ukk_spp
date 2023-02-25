
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
            margin-left: 235px;
            width : 750px;
        }
    </style>
    <title>Admin-data_kelas</title>
</head>
<body>
    <?php
    include "headeradm.php";
    ?>
    <br>
    <table>
        <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Nominal</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "../koneksi.php";
        $qry = mysqli_query($conn, "SELECT * FROM spp");
        $nomor = 1;
        while($data = mysqli_fetch_array($qry)){

        
        ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['tahun']?></td>
            <td><?=  $data['nominal'] ?></td>
            <td>
                <a href="edit_spp.php?id=<?=$data['id_spp']?>">Ubah</a>/
                <a href="hapus_spp.php?id=<?=$data['id_spp']?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <div class="plus">
    <a href="tambah_spp.php"><button class="button1" >Tambah SPP</button></a>
    </div>
</body>
</html>

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
    include "headerptg.php";
    ?>
    <br>
    <table>
        <tr>
            <th>No</th>
            <th>Kelas</th>
            <th>Program Keahlian</th>
        </tr>
        <?php
        include "../koneksi.php";
        $qry = mysqli_query($conn, "SELECT * FROM kelas");
        $nomor = 1;
        while($data = mysqli_fetch_array($qry)){

        
        ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['nama_kelas']?></td>
            <td><?=  $data['kopetensi_keahlian'] ?></td>

        </tr>
        <?php } ?>
    </table>
    <br>

</body>
</html>
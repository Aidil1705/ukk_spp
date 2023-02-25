
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin-data_siswa</title>
</head>
<body>
    <?php
    include "headerptg.php";
    ?>
    <br>
    <br>

    <table>
        <tr>
            <th>No</th>
            <th>Nama siswa</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>Kelas</th>

        </tr>
        <?php
        include "../koneksi.php";

        $qry = mysqli_query($conn, "SELECT * FROM siswa, kelas WHERE siswa.id_kelas = kelas.id_kelas");
        $nomor = 1;
        while($data = mysqli_fetch_array($qry)){
        ?>
        <tr>
            <td><?= $nomor++?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nis'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>

            
        </tr>
        <?php } ?>
    </table>
   


</body>
</html>
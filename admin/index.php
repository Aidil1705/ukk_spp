
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
    include "headeradm.php";
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
            <th>Aksi</th>
        </tr>
        <?php
        include "../koneksi.php";

        $qry = mysqli_query($conn, "SELECT * FROM siswa, kelas WHERE siswa.id_kelas = kelas.id_kelas order by nama");
        $nomor = 1;
        while($data = mysqli_fetch_array($qry)){
        ?>
        <tr>
            <td><?= $nomor++?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nis'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td>
                <a href="edit_siswa.php?nisn=<?=$data['nisn']?>">Ubah</a>/
                <a href="hapus_siswa.php?nisn=<?=$data['nisn']?>">Hapus</a>
            </td>
            
        </tr>
        <?php } ?>
    </table>
   

    <br>
    <div class="plus">
    <a href="tambah_siswa.php"><button class="button1" >Tambah Siswa</button></a>
    </div>
</body>
</html>
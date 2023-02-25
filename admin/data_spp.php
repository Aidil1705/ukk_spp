
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form-control{
            width: 250px;
        }
    </style>
    <title>Admin-data_spp</title>
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
            <th>Tanggal Bayar</th>
            <th>Bulan dibayar</th>
            <th>Tahun dibayar</th>
            <th>Jumlah Bayar</th>
            <th>Alat</th>

        </tr>
        <?php
        include "../koneksi.php";

        $qry = mysqli_query($conn, "SELECT siswa.nama, pembayaran.nisn, pembayaran.tgl_bayar, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, pembayaran.jumlah_bayar, pembayaran.id_pembayaran  FROM pembayaran, siswa WHERE pembayaran.nisn = siswa.nisn ORDER BY tgl_bayar");
        $nomor = 1;
        while($data = mysqli_fetch_array($qry)){
        ?>
        <tr>
            <td><?= $nomor++?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['tgl_bayar'] ?></td>
            <td><?= $data['bulan_dibayar'] ?></td>
            <td><?= $data['tahun_dibayar'] ?></td>
            <td><?= $data['jumlah_bayar'] ?></td>
            <td><a href="hapus_dataspp.php?id=<?=$data['id_pembayaran']?>">Hapus</a></td>
            
        </tr>
        <?php } ?>
    </table>
    <br>
    <div class="container">
        <h1>Cetak Kuitansi</h1>
    
    <form method="POST" action="ekspor.php" enctype="multipart/form-data" >
        <div class="form-group">
          <label>Dari Tanggal</label>
          <input type="date" name="daritanggal" autofocus="" required="" class="form-control" />
        </div>
        <div class="form-group">
          <label>Sampai Tanggal</label>
         <input type="date" name="sampaitanggal" required="" class="form-control"/>
        </div>
        <br>
        <div>
         <button type="submit">Ekspor ke Word</button>
        </div>
        </section>
      </form>
      </div>
   


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .form-control{
            width : 250px;
        }
    </style>
    <title>Petugas-bayar</title>
</head>
<body>
    <?php 
    include "headerptg.php";
    ?>
    <br>
    <br>
    <h1>Form Pembyaran SPP</h1>
    <form action="" method="POST">
    <div class="container">
        
        <div class="form-group">
            <label>NISN</label>
            <input type="text" name="nisn" class="form-control" >
        </div>
        <div class="form-group">
            <label>Petugas</label>
            <select name="id_petugas" class="form-control">
                <?php
                include "../koneksi.php";
                $qry = mysqli_query($conn, "SELECT * FROM petugas ");
                while($data = mysqli_fetch_array($qry)){
                    ?>
                        <option value="<?= $data['id_petugas'] ?>"><?= $data['nama_petugas']?></option>
                        <?php } ?>

                </select> 
        </div>
        <div class="form-group">
            <label>Tanggal Bayar</label>
            <input type="date" name="tanggal" class="form-control" >
        </div>
        <div class="form-group">
            <label>Bulan dibayar</label>
            <input type="text" name="bulan" class="form-control" >
        </div>
        <div class="form-group">
            <label>Tahun dibayar</label>
            <input type="text" name="tahun" class="form-control" >
        </div>
        <div class="form-group">
            <label>Tahun SPP</label>
            <select name="id_spp" id="" class="form-control">
                <?php
                include "../koneksi.php";
                $qry = mysqli_query($conn, "SELECT * FROM spp ");
                while($data = mysqli_fetch_array($qry)){
                    ?>
                        <option value="<?= $data['id_spp'] ?>"><?= $data['tahun']?></option>
                        <?php } ?>

                </select> 
        </div>
        <div class="form-group">
            <label>Jumlah Bayar</label>
            <input type="text" name="bayar" class="form-control" >
        </div>
        <br>
        <div class="form-group">
            <button name="simpan" class="button1">Simpan</button>
        </div>
      
    </div>
    </form>
    <?php
    include "../koneksi.php";
    if(isset($_POST['simpan'])){
        mysqli_query($conn, "INSERT INTO pembayaran SET
        nisn = '$_POST[nisn]',
        id_petugas = '$_POST[id_petugas]',
        tgl_bayar = '$_POST[tanggal]',
        bulan_dibayar = '$_POST[bulan]',
        tahun_dibayar = '$_POST[tahun]',
        id_spp = '$_POST[id_spp]',
        jumlah_bayar = '$_POST[bayar]'");

    }
    ?>
</body>
</html>
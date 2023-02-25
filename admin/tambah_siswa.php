
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
    <title>admin-tambah_siswa</title>
</head>
<body>
    <h1>Tambah Siswa</h1>
    <form action="" method="POST">
    <table>
    <tr>
        <td>NISN</td>
        <td> : <input type="text" name="nisn"></td>
    </tr>
    <tr>
        <td>NIS</td>
        <td> : <input type="text" name="nis"></td>
    </tr>
    <tr>
        <td>Nama Siswa</td>
        <td> : <input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td> :  <select name="id_kelas" id="">
                <?php
                include "../koneksi.php";
                $qry = mysqli_query($conn, "SELECT * FROM kelas ");
                while($data = mysqli_fetch_array($qry)){
                    ?>
                        <option value="<?= $data['id_kelas'] ?>"><?= $data['nama_kelas']?></option>
                        <?php } ?>

                </select>
        </td>
    </tr>
    <tr>
        <td>Tahun SPP</td>
        <td>  : <select name="id_spp" id="">
                <?php
                include "../koneksi.php";
                $qry = mysqli_query($conn, "SELECT * FROM spp ");
                while($data = mysqli_fetch_array($qry)){
                    ?>
                        <option value="<?= $data['id_spp'] ?>"><?= $data['tahun']?></option>
                        <?php } ?>

                </select> 
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td> : <textarea name="alamat" id="" cols="20" rows="5"></textarea></td>
    </tr>
    <tr>
        <td>No Telpon</td>
        <td> : <input type="text" name="no"></td>
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
            mysqli_query($conn, "INSERT INTO siswa SET
            nisn = '$_POST[nisn]',
            nis = '$_POST[nis]',
            nama = '$_POST[nama]',
            id_kelas = '$_POST[id_kelas]',
            id_spp = '$_POST[id_spp]',
            alamat = '$_POST[alamat]',
            no_telpon = '$_POST[no]'");
            header("location:index.php");
        }



    ?>
</body>
</html>
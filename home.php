<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
</head>
<body>
    <center>
        <h2>Pendaftaran Calon Peserta Didik</h2>
        <h1>SMKN 1 SAYUNG</h1>
        <p style="font-size: 25px;"></p>

          <a href="form-daftar.php">Daftar Baru</a> <br>
          <a href="list-siswa.php">Pendaftar</a>
          <?php if( isset($_GET{'status'})): ?>
        <h3>
        <?php
        if($_GET{'status'}== 'sukses'){
            echo "Pendaftaran Siswa Baru berhasil";
        }    else{
            echo"pendaftaran gagal";
        }
        ?>
     </h3>
<?php endif; ?>  <br />
<div class="jarak" style="margin-top:2cm;"></div>
    <a href="logout.php">LOGOUT</a>
    </center>
</body>
</html>
            

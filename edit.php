<?php
require('Belajar.php');
 
if(isset($_GET['ktp'])){
$belajar = new Belajar();
$tabel = $belajar->edit($_GET['ktp']);
$edit = $tabel->fetch(PDO::FETCH_OBJ);
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tambah Data</title>
<link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css">
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Ubah Data</h2>
<form action="edit.php" method="POST" class="form-group">
KTP: <input type="text" name="ktp" value="'.$edit->ktp.'" class="form-control" readonly><br>
Nama: <input type="text" name="nama" value="'.$edit->nama.'" class="form-control"><br>
Telelpon: <input type="text" name="telp" value="'.$edit->telp.'" class="form-control"><br>
Alamat: <input type="text" name="alamat" value="'.$edit->alamat.'" class="form-control"><br>
<input type="submit" name="editdata" value="Edit" class="btn btn-info">
</form>
</div>
</body>
</html>
';
}
 
if(isset($_POST['editdata'])){
$ktp = $_POST['ktp'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
 
$belajar = new Belajar();
$upd = $belajar->edit_data($ktp, $nama, $telp, $alamat);
if($upd == "Success"){
header('Location: tampil.php');
}
}
?>
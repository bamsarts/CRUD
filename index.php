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
<h2>Tambah Data Baru</h2>
<br>
<form action="index.php" method="POST" class="form-group row">
KTP: <input type="text" name="ktp" class="form-control"><br>
Nama: <input type="text" name="nama" class="form-control"><br>
Telepon: <input type="text" name="telp" class="form-control"><br>
Alamat: <input type="text" name="alamat" class="form-control"><br>
<input type="submit" name="tambahdata" value="Tambah Data" class="btn btn-success"><input type="reset" value="Reset" class="btn btn-warning">
</form>
</div>
</body>
</html>
<?php
require('Belajar.php');
if(isset($_POST['tambahdata'])){
$ktp = $_POST['ktp'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$belajar = new Belajar();
$tambah = $belajar -> tambah($ktp, $nama, $telp, $alamat);
if($tambah == "Success"){
header('Location: tampil.php');
}
}
?>
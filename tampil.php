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
    <h2>Tampil Data</h2>
    <table class = "table">
        <tr>
        <td>KTP</td>
        <td>Nama</td>
        <td>Telepon</td>
        <td>Alamat</td>
        <td>Edit</td>
        <td>Hapus</td>
        </tr>
        <?php
        require ('Belajar.php');
        $belajar = new Belajar();
        $tampil = $belajar -> lihat();
        while ($data = $tampil -> fetch (PDO::FETCH_OBJ)){
            echo "
                    <tr>
                    <td>$data->ktp</td>
                    <td>$data->nama</td>
                    <td>$data->telp</td>
                    <td>$data->alamat</td>
                    <td><a class='btn btn-danger' href='tampil.php?delete=$data->ktp'>Hapus</a></td>
                    <td><a class='btn btn-info' href='edit.php?ktp=$data->ktp'>Edit</td>
                    </tr>";
                    };
                    ?>
                    </table>
                    <a href="index.php" class="btn btn-success">Tambah Data Baru</a>
                    </div>
                    </body>
                    </html>

                    <?php
                    if(isset($_GET['delete'])){
                    $del = $belajar -> hapus($_GET['delete']);
                    }
                    ?>
                
       
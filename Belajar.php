<?php
class Belajar{
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=belajar_pdo','root','');
    }
    public function tambah($ktp, $nama, $telp, $alamat){
        $sql = "INSERT INTO data (ktp, nama, telp, alamat) VALUES ('$ktp','$nama','$telp','$alamat')";
        $query = $this -> db -> query($sql);
        if(!$query){
            return "Failed";
        }else{
            return "Success";
        }
    }
    public function edit($ktp){
        $sql = "SELECT * FROM data WHERE ktp='$ktp'";
        $query = $this -> db -> query($sql);
        return $query;
    }
    public function edit_data($ktp, $nama, $telp, $alamat){
        $sql = "UPDATE data SET nama='$nama', telp='$telp', alamat='$alamat' WHERE ktp='$ktp'";
        $query = $this -> db -> query($sql);
        if(!$query){
            return "Failed";
        }else{
            return "Success";
        }
    }
    public function lihat(){
        $sql = "SELECT * FROM data";
        $query = $this -> db -> query($sql);
        return $query;
    }
    public function hapus($ktp){
        $sql = "DELETE FROM data WHERE ktp='$ktp'";
        $query = $this -> db -> query($sql);
    }
}
?>
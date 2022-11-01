<?php

include __DIR__ . '/../Config/Koneksi.php';

class Karyawan
{
    public $kr_kode;
    public $kr_nama;
    public $kr_db;
    public $kr_jk;

    public static function getAll()
    {
        $query = "select * from Karyawan";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi,$query);
    }

    public static function getByPrimarykey($kr_kode)
    {
        $query = "select * from Karyawan where kr_kode = '$kr_kode'";
        $coon = new koneksi();
        return mysqli_query($coon->koneksi,$query);
    }

    public function insert()
    {
       $query = "insert into Karyawan "
           . "values ("
           . "'$this->kr_kode ',"
           . "'$this->kr_nama ',"
           . "'$this->kr_db',"
           . "'$this->kr_jk')";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public function update()
    {
        $query = "update Karyawan set "
            ."kr_nama =  '$this->kr_nama', "
            ."kr_db = '$this->kr_db', "
            ."kr_jk = '$this->kr_jk' "
            ."where kr_kode = '$this->kr_kode'";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi, $query);
    }
    public function delete()
    {
        $query = "delete from Karyawan where kr_kode ='$this->kr_kode'";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi, $query);
    }
}

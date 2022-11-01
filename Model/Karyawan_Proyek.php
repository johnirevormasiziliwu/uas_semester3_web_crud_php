<?php

include __DIR__ . '/../Config/Koneksi.php';

class Karyawan_Proyek
{
    public $kp_id;
    public $kr_kode;
    public $py_kode;
    public $kp_bonus;

    public static function getAll()
    {
        $query = "select * from Karyawan_Proyek";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi,$query);
    }

    public static function getByPrimarykey($kr_kode)
    {
        $query = "select * from Karyawan_Proyek where kr_kode = '$kr_kode'";
        $coon = new koneksi();
        return mysqli_query($coon->koneksi,$query);
    }

    public function insert()
    {
        $query = "insert into Karyawan_Proyek "
            . "values ("
            . "'$this->kp_id ',"
            . "'$this->kr_kode ',"
            . "'$this->py_kode',"
            . "'$this->kp_bonus')";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public function update()
    {
        $query = "update Karyawan_Proyek set "
            ."kr_id =  '$this->kp_id', "
            ."kr_kode = '$this->py_kode', "
            ."kr_bonus = '$this->kp_bonus' "
            ."where kr_kode = '$this->kr_kode'";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi, $query);
    }
    public function delete()
    {
        $query = "delete from Karyawan_Proyek where kr_kode ='$this->kr_kode'";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi, $query);
    }
}


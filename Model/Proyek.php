<?php

include __DIR__ . '/../Config/Koneksi.php';

class Proyek
{
    public $py_kode;
    public $py_nama;
    public $py_deadline;
    public $py_nominal;

    public static function getAll()
    {
        $query = "select * from Proyek";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi,$query);
    }

    public static function getByPrimarykey($py_kode)
    {
        $query = "select * from Proyek where py_kode = '$py_kode'";
        $coon = new koneksi();
        return mysqli_query($coon->koneksi,$query);
    }

    public function insert()
    {
        $query = "insert into Proyek "
            . "values ("
            . "'$this->py_kode ',"
            . "'$this->py_nama ', "
            . "'$this->py_deadline', "
            . "$this->py_nominal)";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public function update()
    {
        $query = "update Proyek set "
            ."py_nama =  '$this->py_nama', "
            ."py_deadline = ' $this->py_deadline ', "
            ."py_nominal = ' $this->py_nominal' "
            ."where py_kode = '$this->py_kode' ";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi, $query);
    }
    public function delete()
    {
        $query = "delete from Proyek where py_kode ='$this->py_kode'";
        $conn = new koneksi();
        return mysqli_query($conn->koneksi, $query);
    }
}


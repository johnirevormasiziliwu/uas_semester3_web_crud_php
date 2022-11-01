<?php
include('../../Model/Karyawan.php');
$kr_kode = $_REQUEST ['kr_kode'];
$krw = new Karyawan();
$krw->kr_kode =$kr_kode;

$krw->delete();

header('location: /index.php?halaman=ListKaryawan');





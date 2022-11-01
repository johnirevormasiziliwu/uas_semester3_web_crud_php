<?php
include('../../Model/Karyawan.php');

$kode =$_REQUEST['kr_kode'];
$nama = $_REQUEST['kr_nama'];
$tgllahir = $_REQUEST['kr_db'];
$jk =$_REQUEST['kr_jk'];

$kr = new Karyawan();

$kr->kr_kode=$kode;
$kr->kr_nama=$nama;
$kr->kr_db=$tgllahir;
$kr->kr_jk=$jk;

$kr->insert();

header('Location: /index.php?halaman=ListKaryawan');

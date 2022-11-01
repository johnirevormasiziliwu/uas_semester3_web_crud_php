<?php
include('../../Model/Proyek.php');

$kode =$_REQUEST['py_kode'];
$nama = $_REQUEST['py_nama'];
$dead = $_REQUEST['py_deadline'];
$nom =$_REQUEST['py_nominal'];

$py = new Proyek();

$py->py_kode=$kode;
$py->py_nama=$nama;
$py->py_deadline=$dead;
$py->py_nominal=$nom;

$py->insert();

header('Location: /index.php?halaman=ListProyek');

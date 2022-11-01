<?php
include('../../Model/Proyek.php');

$kode =$_REQUEST['py_kode'];
$nama = $_REQUEST['py_nama'];
$dead = $_REQUEST['py_deadline'];
$nom =$_REQUEST['py_nominal'];

$pr = new Proyek();

$pr->py_kode=$kode;
$pr->py_nama=$nama;
$pr->py_deadline=$dead;
$pr->py_nominal=$nom;

$pr->update();

header('Location: /index.php?halaman=ListProyek');
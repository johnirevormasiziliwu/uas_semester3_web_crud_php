<?php
include('../../Model/Proyek.php');
$py_kode = $_REQUEST ['py_kode'];
$prw = new Proyek();
$prw->py_kode =$py_kode;

$prw->delete();

header('location: /index.php?halaman=ListProyek');






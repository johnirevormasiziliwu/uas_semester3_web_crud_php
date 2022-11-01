
<?php
include('Model/Karyawan.php');
$kode = $_REQUEST["kr_kode"];
$krList = Karyawan::getByPrimarykey($kode);
$kr = [];
while ($karyawan = mysqli_fetch_object($krList))
{
    $kr=$karyawan;
}


?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Hapus</h3>
        <h2>Anda yakin Hapus data ini ?</h2>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label class ="font-weight-bold"> Kode karyawan : <?=$kr->kr_kode ?> </label>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Nama Karyawan : <?=$kr->kr_nama ?> </label>
        </div>
        <form action="/View/Karyawan/prosesHapus.php">
    <input type="hidden" name="kr_kode" value="<?=$kr->kr_kode ?>" />
            <div class="card-footer">
                <button class="btn btn-danger" type="submit">
                    <i class="fa fa-delete"></i>
                    Hapus
                </button>
            </div>

</form>


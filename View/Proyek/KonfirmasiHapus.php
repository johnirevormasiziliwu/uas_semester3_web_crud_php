
<?php
include('Model/Proyek.php');
$kode = $_REQUEST["py_kode"];
$prList = Proyek::getByPrimarykey($kode);
$pr = [];
while ($proyek = mysqli_fetch_object($prList))
{
    $pr=$proyek;
}


?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Hapus</h3>
        <h2>Anda yakin Hapus data ini ?</h2>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label class ="font-weight-bold"> Kode Proyek : <?=$pr->py_kode ?> </label>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Nama Karyawan : <?=$pr->py_nama ?> </label>
        </div>
        <form action="/View/Proyek/prosesHapus.php">
            <input type="hidden" name="py_kode" value="<?=$pr->py_kode ?>" />
            <div class="card-footer">
                <button class="btn btn-danger" type="submit">
                    <i class="fa fa-delete"></i>
                    Hapus
                </button>
            </div>
</form>



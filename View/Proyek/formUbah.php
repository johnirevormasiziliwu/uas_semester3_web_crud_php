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



<form action="/View/Proyek/prosesUbah.php">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Ubah</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Kode Proyek </label>
                <input class="form-control" type="text" readonly required name="py_kode" value="<?= $pr->py_kode ?> " />
            </div>

            <div class="form-group">
                <label for="" >Nama Proyek </label>
                <input class="form-control" type="text" required name="py_nama" value="<?=$pr->py_nama ?>" />
            </div>

            <div class="form-group">
                <label for="">Deadline </label>>
                <input class="form-control" type="date" required name="py_deadline" value="<?=$pr->py_deadline ?>" />
            </div>

            <div class="form-group">
                <label for="">Nominal </label>>
                <input class="form-control" type="text" readonly required name="py_nominal" value="<?= $pr->py_nominal ?> " />
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">
                <i class="fa fa-save"></i>
                Simpan Proyek
            </button>
        </div>
    </div>





</form>




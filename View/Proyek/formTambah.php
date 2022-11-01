
<form action="/View/Proyek/prosesTambah.php">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Tambah</h3>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label for="">Kode Proyek</label>
                <input class="form-control" type="text" required name="py_kode">
            </div>

            <div class="form-group">
                <label for="">Nama Proyek </label>
                <input class="form-control" type="text" required name="py_nama" />
            </div>
            <div class="form-group">
                <label for="">Deadline </label>
                <input class="form-control" type="date" required name="py_deadline" />
            </div>
            <div class="form-group">
                <label for="">Nominal </label>
                <input class="form-control" type="text" required name="py_nominal" />

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


        <form action='/View/Karyawan/prosesTambah.php'>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Tambah</h3>
            </div>
            <div class="card-body">

                    <div class="form-group">
                        <label for="">Kode karyawan</label>
                        <input class="form-control" type="text" required name="kr_kode">
                    </div>

                    <div class="form-group">
                        <label for="">Nama Karyawan </label>
                        <input class="form-control" type="text" required name="kr_nama" />
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal lahir Karyawan </label>
                        <input class="form-control" type="date" required name="kr_db" />
                    </div>
                    <div class="form-group">
                        <label for="">jenis kelamin karyawan </label>
                        <select class="form-control" name="kr_jk">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit">
                    <i class="fa fa-save"></i>
                    Simpan Karyawan
                </button>
            </div>
          </div>
        </form>

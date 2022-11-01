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



            <form action="/View/Karyawan/prosesUbah.php">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Ubah</h3>
                    </div>
                    <div class="card-body">

                 <div class="form-group">
                     <label for=""> Kode Karyawan </label>
                     <input class="form-control" type="text" readonly required name="kr_kode" value="<?= $kr->kr_kode ?> " />
                 </div>


                <div class="form-group">
                    <label for=""> Nama Karyawan </label>
                    <input class="form-control" type="text" required name="kr_nama" value="<?=$kr->kr_nama ?>" />
                </div>

                <div class="form-group">
                    <label for=""> Tanggal lahir Karyawan </label>
                    <input class="form-control" type="date" required name="kr_db" value="<?=$kr->kr_db ?>" />
                </div>

                <div>
                    <label for=""> jenis kelamin karyawan </label>
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



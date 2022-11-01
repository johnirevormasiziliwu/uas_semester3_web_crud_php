
<div class="card">
    <div class="card-header">
        Data Karyawan
    </div>
    <div class="card-body">
        <table class="table table-hover table-sm table-borderless" >
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>kode karyawan</th>
                    <th>Nama</th>
                    <th>Tanggal lahir</th>
                    <th>jenis kelamin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('Model/Karyawan.php');
                $krList=Karyawan::getAll();
                $nomer = 1;
                while($karyawan = mysqli_fetch_object($krList))
                {
                    ?>
                    <tr>
                        <td><?=$nomer++?></td>
                        <td><?=$karyawan->kr_kode?></td>
                        <td><?=$karyawan->kr_nama?></td>
                        <td><?=$karyawan->kr_db?></td>
                        <td><?=$karyawan->kr_jk?></td>
                        <td>

                            <a class="btn btn-sm btn-warning" href="/index.php?halaman=editKaryawan&kr_kode=<?= $karyawan->kr_kode ?>">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="/index.php?halaman=hapusKaryawan&kr_kode=<?= $karyawan->kr_kode ?>">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


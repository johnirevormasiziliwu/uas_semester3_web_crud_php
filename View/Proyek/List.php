
<div class="card">
    <div class="card-header">
        Data Proyek
    </div>
    <div class="card-body">
        <table class="table table-hover table-sm table-borderless" >
            <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>kode Proyek</th>
                <th>Nama Pryek</th>
                <th>Deadline</th>
                <th>Nominal</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include_once('Model/Proyek.php');
            $prList=Proyek::getAll();
            $nomer = 1;
            while($proyek = mysqli_fetch_object($prList))
            {
                ?>
                <tr>
                    <td><?=$nomer++?></td>
                    <td><?=$proyek->py_kode?></td>
                    <td><?=$proyek->py_nama?></td>
                    <td><?=$proyek->py_deadline?></td>
                    <td><?=$proyek->py_nominal?></td>
                    <td>

                        <a class="btn btn-sm btn-warning" href="/index.php?halaman=editProyek&py_kode=<?= $proyek->py_kode ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="/index.php?halaman=hapusProyek&py_kode=<?= $proyek->py_kode ?>">
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


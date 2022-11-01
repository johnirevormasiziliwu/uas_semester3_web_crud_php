<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UJIAN PWEB</title>
    <title>List Data Karyawan</title>
    <link rel="stylesheet" href="/Asset/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <script src="/Asset/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
    <body>
        <div class="container-fluid">
            <h1>UJIAN PEMOGRAMAN WEB</h1>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="btn btn-dark">Menu</div>
                        <div class="card-body">
                            <a class="btn btn-primary btn-block " href="/index.php?">
                                <i class="fas fa-house-user"></i>
                                Home
                            </a>
                            <a class="btn btn-primary btn-block" href="/index.php?halaman=ListKaryawan">List Karyawan</a>
                            <p></p>
                            <a class="btn btn-primary btn-block" href="/index.php?halaman=addKaryawan">Tambah Karyawan</a>
                            <p></p>
                            <a class="btn btn-primary btn-block" href="/index.php?halaman=ListProyek">List Proyek</a>
                             <p></p>
                             <a class="btn btn-primary btn-block" href="/index.php?halaman=addProyek">Tambah Proyek</a>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <?php
                    $halaman = isset($_REQUEST['halaman']) ? $_REQUEST['halaman'] : '';
                    $include ="Leading.php";
                    if ($halaman == 'ListKaryawan') {
                        $include =  'View/Karyawan/List.php';
                    }elseif ($halaman == 'addKaryawan'){
                        $include = 'View/Karyawan/formTambah.php';
                    }elseif ($halaman == 'editKaryawan'){
                        $include  = 'View/Karyawan/formUbah.php';
                    }elseif ($halaman == 'hapusKaryawan'){
                        $include  = 'View/Karyawan/KonfirmasiHapus.php';
                    }elseif ($halaman == 'ListProyek') {
                        $include  = 'View/Proyek/List.php';
                    }elseif ($halaman == 'editProyek') {
                        $include = 'View/Proyek/formUbah.php';
                    }elseif ($halaman == 'hapusProyek') {
                        $include = 'View/Proyek/KonfirmasiHapus.php';
                    }elseif ($halaman == 'addProyek'){
                        $include  = 'View/Proyek/formTambah.php';
                    }

                    include_once $include;
                    ?>
                </div>
            </div>
        </div>

    </body>
</html>

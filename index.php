<?php

// Connect to API for Data Statistik tiap Daerah
$sJson = file_get_contents("https://data.covid19.go.id/public/api/prov.json");
$decode = json_decode($sJson, true);
$sjson = $decode["list_data"];

$dataTiapHalaman = 12;
$totalData = count($sjson);
$jmlHalaman = ceil($totalData / $dataTiapHalaman);
$halAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($dataTiapHalaman * $halAktif) - $dataTiapHalaman;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C19</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="js/jquery.js"></script>
</head>


<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">C19</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="#">Statistik</a>
                    <a class="nav-link" href="#" id="rumkit">Rumah Sakit Rujukan</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of navbar -->

    <!-- Menu -->
    <div class="container-fluid mt-3">
        <div class="row gx-2 mt-3">
            <!-- Left menu -->
            <div class="col-md-2">
                <div class="card">
                    <img src=" ..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <!-- Center menu -->
            <div class="col-md-10" id="menu">
                <div class="border rounded">
                    <h2 class="text-center">Data Covid Tiap Provinsi di Indonesia</h2>
                    <div class="row justify-content-around">
                        <!-- Search button -->
                        <div class="col float-start">
                            <form action="" class="d-flex">
                                <input class="form-control mx-2 rounded-pill" type="search" placeholder="Cari Provinsi" aria-label="Search">
                            </form>
                        </div>
                        <!-- Pagination -->
                        <div class="col">
                            <nav aria-label="...">
                                <ul class="pagination float-end mx-2">
                                    <!-- <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li> -->
                                    <?php for ($i = 1; $i <= $jmlHalaman; $i++) : ?>
                                        <?php if ($i == $halAktif) : ?>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                                            </li>
                                        <?php else : ?>
                                            <li class="page-item" aria-current="page">
                                                <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    <!-- <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <table class="table table-striped border bg-light">
                        <thead>
                            <tr>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Jumlah Kasus</th>
                                <th scope="col">Jumlah Dirawat</th>
                                <th scope="col">Jumlah Meninggal</th>
                                <th scope="col">Jumlah Sembuh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $j = 1; ?>
                            <?php foreach ($sjson as $data) : ?>
                                <?php if ($j > $dataTiapHalaman) break; ?>
                                <tr>
                                    <th><?= $data["key"]; ?></th>
                                    <td><?= $data["jumlah_kasus"]; ?></td>
                                    <td><?= $data["jumlah_dirawat"]; ?></td>
                                    <td><?= $data["jumlah_meninggal"]; ?></td>
                                    <td><?= $data["jumlah_sembuh"]; ?></td>
                                </tr>
                                <?php $j++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right menu -->
            <div class="col-md-2"></div>
        </div>
    </div>
    <!-- End of menu -->

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>
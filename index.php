<?php

// Connect to API
$sJson = file_get_contents("https://data.covid19.go.id/public/api/prov.json");
$decode = json_decode($sJson, true);
$sjson = $decode["list_data"];

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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">C19</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Statistik</a>
                <a class="nav-link" href="#">Rumah Sakit Rujukan</a>
            </div>
        </div>
    </div>
</nav>
<!-- End of navbar -->

<!-- Menu -->
<div class="container-fluid mt-3">
    <div class="row">
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
        <div class="col-md-10">
            <div class="border rounded">
                <h2 class="text-center">Data Tiap Provinsi di Indonesia</h2>
                <table class="table border bg-light">
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
                        <?php foreach ($sjson as $data) : ?>
                            <tr>
                                <th><?= $data["key"]; ?></th>
                                <td><?= $data["jumlah_kasus"]; ?></td>
                                <td><?= $data["jumlah_dirawat"]; ?></td>
                                <td><?= $data["jumlah_meninggal"]; ?></td>
                                <td><?= $data["jumlah_sembuh"]; ?></td>
                            </tr>
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

<body>

</body>

</html>
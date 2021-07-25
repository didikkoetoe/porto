<?php

// Connect to API
$json = file_get_contents("https://dekontaminasi.com/api/id/covid19/hospitals");
$decode = json_decode($json, true);

?>
<!-- Table -->
<table class="table rounded table-bordered">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Region</th>
            <th scope="col">Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($decode as $rumkit) : ?>
            <tr>
                <th><?= $rumkit["name"]; ?></th>
                <th><?= $rumkit["address"]; ?></th>
                <th><?= $rumkit["region"]; ?></th>
                <th><?= $rumkit["phone"]; ?></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
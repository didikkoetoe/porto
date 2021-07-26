<?php

// Koneksi ke halaman functions.php
require "../functions/functions.php";

if (isset($_POST["daftar"])) {
    // Cek apakah password dan konfirmasi password sama
    if ($_POST["password"] != $_POST["password2"]) {
        echo "<script>
        alert('Password tidak sama');
        document.location.href = 'signup.php';
        </script>";
        die;
    }

    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Data berhasil di tambahkan');
        document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal di tambahkan');
        document.location.href = 'login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/signup.css">
    <script src="../js/jquery.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="border rounded px-3">
                    <h2 class="text-center">Daftar Akun</h2>
                    <form action="" class="form" method="POST">
                        <div class="mb-3">
                            <div class="input-group">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                <input type="text" name="username" class="form-control" placeholder="Masukan username" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <div class="input-group-text"><i class="fas fa-at"></i></div>
                                <input type="email" name="email" class="form-control" placeholder="Masukan email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <div class="input-group-text"><i class="fas fa-lock-open"></i></div>
                                <input type="password" name="password" class="form-control" placeholder="Masukan password" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                <input type="password" name="password2" class="form-control" placeholder="Masukan kembali password" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="login.php" class="btn btn-danger">Kembali</a>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            <button name="daftar" class="btn btn-primary">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php

// Koneksi ke halaman functions.php
require "../functions/functions.php";

if (isset($_POST["masuk"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($result) > 0) {
        header("Location: ../index.php");
        exit;
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <script src="../js/jquery.js"></script>
</head>

<body>

    <!-- Form login -->
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center">Login</h2>
                <form action="" class="form" method="POST">
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            <input type="text" class="form-control" placeholder="Masukan username" name="username" autocomplete="off">
                        </div>
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-lock"></i></div>
                            <input name="password" type="password" class="form-control" placeholder="Masukan password">
                        </div>
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Ingat saya</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" name="masuk">Masuk</button>
                    <hr>
                    <a href="signup.php" class="btn btn-success">Sign Up</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir form login -->

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
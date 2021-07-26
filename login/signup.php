<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <script src="../js/jquery.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Daftar Akun</h2>
                <form action="" class="form" method="POST">
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            <input type="text" name="username" class="form-control" placeholder="Masukan username" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-at"></i></div>
                            <input type="email" name="email" class="form-control" placeholder="Masukan email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-lock-open"></i></div>
                            <input type="password" name="password" class="form-control" placeholder="Masukan password">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-lock"></i></div>
                            <input type="password" name="password2" class="form-control" placeholder="Masukan kembali password">
                        </div>
                    </div>
                    <a href="login.php" class="btn btn-danger">Kembali</a>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <button name="daftar" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
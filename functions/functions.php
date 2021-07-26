<?php
// Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "porto") or die(mysqli_error($db));

// Function untuk registrasi user
function registrasi($post)
{
    global $db;

    // Tampung semua value
    $username = strtolower(htmlspecialchars($post["username"]));
    $email = htmlspecialchars($post["email"]);
    $password = stripslashes($post["password"]);

    // cek apakah ada username yang sama
    $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($result) > 0) {
        echo "<script>
        alert('Username sudah di gunakan');
        </script>";

        return false;
        die;
    }

    // Enkripsi password terlebih dahulu
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users VALUES (
        '' , '$username' , '$email' , '$password')";

    // Masukan ke database
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

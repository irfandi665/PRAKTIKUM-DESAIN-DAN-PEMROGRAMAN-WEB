<?php
    // ini buat koneksi
    include 'function.php';
    //jika tombol registrasi di tekan
    if (isset($_POST["register"])) {
    if (registrasi ($_POST) > 0) {
    echo "
    <script>
    alert('Admin berhasil di tambahkan');
    document.location.href = 'login.php';
    </script>
    ";
    } else {
    echo mysqli_error($koneksi);
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="post" align="center">
    <H1>Halaman Registrasi Admin</H1>
    <table align="center">
        <tr>
        <td>Username</td>
        <td><input type="text" name="username" class="bil"></td>
        </tr>
        <tr>
        <td>Password</td>
        <td><input type="text" name="password" class="bil"></td>
        </tr>
        <tr>
        <td>konfirmasi password</td>
        <td><input type="text" name="password2" class="bil"></td>
        </tr>
        <tr>
        <td>
        <input type="submit" name="register" value="register" class="tombol">
        </td>
        </tr>
    </table>
    </form>
</body>
</html>


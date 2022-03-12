<?php
    //koneksi ke file tampil dengan file include
    include 'function.php';

    //mengambil data dari tb_karyawan
    $ambil = query("SELECT * FROM tb_karyawan");

    if (isset($_POST["cari"])) {
        $ambil = cari ($_POST ["keyword"]);
    }

    //star dulu session nya
    session_start();

    //cek session login
    if (!isset($_SESSION ["login"])) {
    header("location: login.php");
    exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tampil</title>
</head>
<body>
    <br>
    <a href="logout.php">Logout</a>
    <a href="login.php">login</a>
    <a href="tambah.php">Tambah Data</a>

    <form action="" method="post">
        <input type="text" name="keyword" placeholder="silahkan masukan"
        autocomplete="off">
    <input type="submit" name="cari" value="cari">
    </form>

    <table border="1">
        <tr>
            <td>Nomor</td>
            <td>Nip</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($ambil as $row):?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row ["nip"];?></td>
            <td><?php echo $row ["nama"];?></td>
            <td><?php echo $row ["alamat"];?></td>
            <td>
                <a href="hapus.php ?id= <?php echo $row["id"] ?>"onclick="return confirm(Yakin ?);">Hapus</a>
                <a href="edit.php?id= <?php echo $row["id"] ?>">Edit</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
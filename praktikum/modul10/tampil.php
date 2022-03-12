<?php
    //koneksi ke file tampil dengan file include
    include 'function.php';

    //mengambil data dari tb_karyawan
    $ambil = query("SELECT * FROM tb_karyawan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tampil</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a>
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
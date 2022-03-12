<?php 
    include'koneksi.php';

    $ambil = query("select * from tb_karyawan")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><a href="tambah.php">Tambah Data</a>
        <table align="center" border="1">
            <tr>
                <td>
                    Nomor
                </td>
                
                <td>
                    NIP
                </td><td>Nama</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($ambil as $row): ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["nip"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

        </table>
</body>
</html>
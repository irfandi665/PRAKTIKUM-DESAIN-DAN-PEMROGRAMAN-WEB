<?php
    include 'koneksi.php';

    $ambil = query("SELECT * FROM tb_pendaftaran");
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
<div class="qwe">
    
    <table align="center" border="1">
    <h3 align="center">Daftar Siswa</h3>
        <tr>
            <td>No</td>
            <td>ID</td>
            <td>Nama</td>

            <td colspan="2">Aksi</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($ambil as $row):?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row ["id"];?></td>
            <td><?php echo $row ["nama"];?></td>

            <td>
            
            <a href="hapus.php ?id= <?php echo $row["id"] ?>"onclick="return confirm(Yakin ?);">Hapus</a>

            </td>
            <td>
            <a href="edit.php?id= <?php echo $row["id"] ?>">Edit</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
            <br><br><br><br>
        <table align="center">
            <tr>
                <td>
                    <a href="form-daftar.php" class="tombol">Tambah baru</a>
                </td>
                <td>
                    <a href="index.php" class="tombol">Home</a>
                </td>
            </tr>
            
        </table>
    
    </div>
</body>
</html>
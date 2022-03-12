<?php
    //koneksi ke file tampil dengan file include
    include 'function.php';

    $ambil = query("SELECT * FROM tb_praktikum9");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tampil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br><br>
    <div class="navbar">
        <nav>
            <table align="center">
                <tr>
                    <td>
                        <a href="index.php" style="text-decoration:none" class="tombol">Home</a>
                    </td>
                    <td>
                        <a href="tambah.php" style="text-decoration:none" class="tombol">Tambah</a>
                    </td>
                    <td>
                        <a href="tampil.php" style="text-decoration:none" class="tombol">Tampil</a>
                    </td>
                    
                </tr>
            </table>
        </nav>
    </div>
    <br><br><br>
<div class="qwe">
    <table align="center" border="1">
        <tr>
            <td>nomor</td>
            <td>ID</td>
            <td>Nama</td>
            <td>Berat</td>
            <td>Kategori</td>
            <td>Harga</td>
            <td>Asal</td>
            <td colspan="2">Aksi</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($ambil as $row):?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row ["id"];?></td>
            <td><?php echo $row ["nama"];?></td>
            <td><?php echo $row ["berat"];echo" kg";?></td>
            <td><?php echo $row ["kategori"];?></td>
            <td><?php echo"Rp. "; echo $row ["harga"];?></td>
            <td><?php echo $row ["asal"];?></td>
            <td>
            <!-- <a href="hapus.php">Hapus</a> -->
            <a href="hapus.php ?id= <?php echo $row["id"] ?>"onclick="return confirm(Yakin ?);">Hapus</a>

            </td>
            <td>
            <a href="edit.php?id= <?php echo $row["id"] ?>">Edit</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>
<?php
    //koneksi file tambah dengan function.php
    include 'function.php';

    if (isset($_POST["tambah"])) {
        if (simpan ($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil di tambahkan');
                    document.location.href = 'tampil.php';
                </script>
                ";
        }else{
            echo "
                <script>
                alert('data gagal di tambahkan');
                document.location.href = 'tampil.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tambah Data</title>
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

<div class="mahasiswa">
    <form action="" method="post" align="center">
        <h2>Input Data Barang</h2>
        <h4>Silahkan isi</h4>
        <table align="center">
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="text" name="nama" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Berat Barang</td>
                <td>
                    <input type="text" name="berat" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori" id="" class="bil">
                    <option value="">---pilih---</option>
                        <option value="SI 03 A">SI 03 A</option>
                        <option value="SI 03 B">SI 03 B</option>
                        <option value="SI 03 C">SI 03 C</option>
                        <option value="SI 03 D">SI 03 D</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td>
                    <input type="text" name="harga" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Asal Barang</td>
                <td>
                    <input type="text" name="asal" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="tambah" name="tambah" class="tombol">
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
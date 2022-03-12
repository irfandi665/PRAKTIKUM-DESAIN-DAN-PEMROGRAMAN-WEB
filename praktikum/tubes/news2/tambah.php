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
    <link rel="stylesheet" href="asset/css/admin.css">
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

<div class="tubes">
    <form action="" method="post" align="center" enctype="multipart/form-data">
        <h2>Input Data</h2>
        <h4>Silahkan isi</h4>
        <table align="center">
            <tr>
                <td>Judul Berita</td>
                <td>
                    <input type="text" name="judul" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Isi Berita</td>
                <td>
                    <textarea name="isi" id="" cols="30" rows="10" class="bil"></textarea>
                    <!-- <input type="text" name="isi" id="" class="bil"> -->
                </td>
            </tr>
            <tr>
                <td>Jenis Berita</td>
                <td align="left">
                    <select name="jenis" id="" class="opt">
                        <option value="">--pilih--</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Politik">Politik</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Seni">Seni</option>
                        <option value="Olah Raga">Olah Raga</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Author</td>
                <td>
                <input type="text" name="author" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>
                    <input type="text" name="tahun" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    <input type="file" name="gambar" id="" class="bil">
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
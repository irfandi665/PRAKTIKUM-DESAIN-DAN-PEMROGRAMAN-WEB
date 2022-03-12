<?php
    //koneksi file tambah dengan function.php
    include 'function.php';

    //kondisi jika tombol button ditekan
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
    //star dulu session nya
    session_start();
    //cek session login artinya jika ingin mengakses halaman yang ingin di kunjungi
    // (halaman yang dibuat session, maka harus login terlebih dahulu)
    if (!isset($_SESSION ["login"])) {
    header("location: Login.php");
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tambah Data</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <th colspan="2" >Input Data</th>
            </tr>
            <tr>
                <td>Nip</td>
                <td><input type="text" name="nip"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" name="tambah" value="tambah">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
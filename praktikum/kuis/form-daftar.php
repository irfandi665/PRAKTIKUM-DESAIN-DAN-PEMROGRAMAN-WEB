<?php 
    include 'koneksi.php';

    if (isset($_POST["tambah"])) {
        if (simpan ($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil di tambahkan');
                    document.location.href = 'list-siswa.php';
                </script>
                ";
        }else{
            echo "
                <script>
                alert('data gagal di tambahkan');
                document.location.href = 'list-siswa.php';
                </script>
            ";
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

    <div class="daftar">
    <h3 align="center">Form Pendaftaran Siswa</h3>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        <input type="text" name="nama" id="" class="bil">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" class="bil" id="">
                        <!-- <textarea name="alamat" id="" cols="20" rows="10" class="bil"></textarea> -->
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                    <input type="radio" name="jk" class="jk" value="Laki-laki">Laki-laki
                    <input type="radio" name="jk" class="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama" id="" class="opt">
                            <option value="">--pilih--</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" name="tambah" value="tambah" class="tombol">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
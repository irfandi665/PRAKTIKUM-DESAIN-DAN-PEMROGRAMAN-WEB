<?php 

include 'koneksi.php';

$id=$_GET["id"];

$data= query("SELECT * FROM tb_pendaftaran WHERE id = $id")[0];



//membuat kondisi ketika tombol button simpan di tekan
if (isset($_POST["edit"])) {

    if (ubah($_POST) > 0) {
        echo "

        <script>
            alert('data berhasil di edit');
            document.location.href = 'list-siswa.php';
        </script>

        ";
    }
    else {
        echo "
        <script>
            alert('data gagal di edit');
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
    <h4>Form Edit Siswa</h4>
    <form action="" method="post">
        <table>
            <tr>
            <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
            </tr>
            <tr>
                <td colspan="2"><h3>Silahkan Rubah Data </h3></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class="bil" required="" value="<?php echo $data["nama"] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" class="bil" required="" value="<?php echo $data["alamat"] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <!-- <input type="text" name="jk" class="bil" required="" value="<?php echo $data["jk"] ?>"> -->
                        <input type="radio" name="jk" class="jk" value="Laki-laki">Laki-laki
                        <input type="radio" name="jk" class="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <!-- <input type="text" name="agama" class="bil" required="" value=""> -->
                    <select name="agama" id="" class="opt">
                            <option value=""><?php echo $data["agama"] ?></option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td colspan="2" align="center"><input type="submit" name="edit" value="edit" class="tombol"></td>
            </tr>


        </table>
    </form>
    </div>

</body>
</html>


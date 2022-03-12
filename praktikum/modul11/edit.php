<?php  
    include 'function.php';
    $id=$_GET["id"];
    $data= query("SELECT * FROM tb_karyawan WHERE id = $id")[0];
    
    //membuat kondisi ketika tombol button simpan di tekan
    if (isset($_POST["edit"])) {
    if (ubah($_POST) > 0) {
    echo "
    <script>
        alert('data berhasil di edit');
        document.location.href = 'tampil.php';
        </script>
    ";
    }
    else {
    echo "
        <script>
        alert('data gagal di edit');
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table align="center"> 
            <tr>
                <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
            </tr>
            <tr>
                <td colspan="2"><h3>Silahkan Rubah Data </h3></td>
            </tr>
            <tr>
                <td>Nip</td>
                <td>
                    <input type="text" name="nip" required="" value="<?php echo $data["nip"] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" required="" value="<?php echo $data["nama"] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" required="" value="<?php echo $data["alamat"] ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="edit" value="edit">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>
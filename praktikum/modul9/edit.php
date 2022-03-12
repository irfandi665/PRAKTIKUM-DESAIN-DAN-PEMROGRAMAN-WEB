<?php  
    include 'function.php';
    $id=$_GET["id"];
    $data= query("SELECT * FROM tb_praktikum9 WHERE id = $id")[0];
    
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

<br><br>
    <div class="navbar">
        <nav>
            <table align="center">
                <tr>
                    <td>
                        <a href="index.php" class="tombol">Home</a>
                    </td>
                    <td>
                        <a href="tambah.php" class="tombol">Tambah</a>
                    </td>
                    <td>
                        <a href="tampil.php" class="tombol">Tampil</a>
                    </td>
                    
                </tr>
            </table>
        </nav>
    </div>
    <br><br><br>

<div class="mahasiswa">
    <form action="" method="post">
        <table align="center"> 
            <tr>
                <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
            </tr>
            <tr>
                <td colspan="2"><h3>Silahkan Rubah Data </h3></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="text" name="nama" id="" value="<?php echo $data["nama"] ?>" class="bil">
                </td>
            </tr>
            <tr>
                <td>Berat Barang</td>
                <td>
                    <input type="text" name="berat" value="<?php echo $data["berat"] ?>" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori" id="" class="bil">
                    <option value="<?php echo $data["kategori"] ?>"><?php echo $data["kategori"] ?></option>
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
                    <input type="text" name="harga" value="<?php echo $data["harga"] ?>" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Asal Barang</td>
                <td>
                    <input type="text" name="asal" value="<?php echo $data["asal"] ?>" id="" class="bil">
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Edit" name="edit" class="tombol">
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
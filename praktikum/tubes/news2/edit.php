<?php  
    include 'function.php';
    $id=$_GET["id"];
    $data= query("SELECT * FROM tb_berita WHERE id = $id")[0];
    
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
    <link rel="stylesheet" href="asset/css/admin.css">
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

<div class="tubes">
    <form action="" method="post">
        <table align="center"> 
            <tr>
                <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
            </tr>
            <tr>
                <td colspan="2"><h3>Silahkan Ubah Data </h3></td>
            </tr>
            <tr>
                <td>Judul Berita</td>
                <td>
                    <input type="text" name="judul" id="" value="<?php echo $data["judul"] ?>" class="bil">
                </td>
            </tr>
            <tr>
                <td>Isi Berita</td>
                <td>
                <textarea name="isi" id="" cols="30" rows="10" class="bil" value="<?php echo $data["isi"] ?>"><?php echo $data["isi"] ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Jenis Berita</td>
                <td>
                    <select name="jenis" id="" class="bil">
                    <option value="<?php echo $data["jenis"] ?>"><?php echo $data["jenis"] ?></option>
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
                    <input type="text" name="author" value="<?php echo $data["author"] ?>" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>
                    <input type="text" name="tahun" value="<?php echo $data["tahun"] ?>" id="" class="bil">
                </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    <input type="file" name="gambar" value="<?php echo $data["gambar"] ?>" id="" class="bil">
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
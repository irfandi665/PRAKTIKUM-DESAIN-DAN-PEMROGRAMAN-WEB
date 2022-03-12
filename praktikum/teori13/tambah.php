<?php 
    include'koneksi.php';

    // if (isset($_POST["tambah"])) {
    //     if (simpan ($_POST)>0) {
    //         echo "
    //         <script>
    //             alert('Data berhasil ditambahkan');
    //             document.location.href = 'satu.php';
    //         </script>
    //         ";
    //     }else {
    //         echo "
    //             <script>
    //                 alert('Data gagal ditambahkan');
    //                 document.location.href = 'satu.php';
    //             </script>
    //         ";
    //     }
    // }

    if (isset($_POST["tambah"])) {
        if (simpan ($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil di tambahkan');
                    document.location.href = 'satu.php';
                </script>
                ";
        }else{
            echo "
                <script>
                alert('data gagal di tambahkan');
                document.location.href = 'satu.php';
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
</head>
<body>
    <form action="" method="post">
        <table align="center">
            <tr>
                <th colspan="2">Input data</th>
            </tr>
            <tr>
                <td>NIP</td>
                <td><input type="text" name="nip" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                <textarea name="alamat" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="tambah">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
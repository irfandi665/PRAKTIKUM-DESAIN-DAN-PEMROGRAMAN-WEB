<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/latihan1.css">
</head>
<body>
    <div class="form1">
    
    <form action="/action.php" method="post" >
            <table align="center" width="500px">
                <tr>
                    <th align="center" colspan="4" ><h2>Data Anda</h2></th>
                </tr>
                <tr>
                    <td>Nama</td><td>: </td>
                    <td>
                    <?php echo $_POST['nama'] ?>
                    </td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td><td>: </td>
                    <td>
                    <?php echo $_POST['ttl'] ?>
                    </td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td><td>: </td>
                    <td>
                    <?php echo $_POST['date'] ?>
                    </td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td><td>: </td>
                    <td>
                    <?php echo $_POST['jk'] ?>
                    </td>
                </tr>
                
            
                <tr>
                    <td>Alamat</td><td>: </td>
                    <td>
                    <?php echo $_POST['isi'] ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Prodi</td><td>: </td>
                    <td>
                    <?php echo $_POST['prodi'] ?>
                    </td>
                </tr>

                <tr>
                    <td>E-mail</td><td>: </td>
                    <td>
                    <?php echo $_POST['email'] ?>
                    </td>
                </tr>

                <tr>
                    <td>Telepon</td><td>: </td>
                    <td>
                         <?php echo $_POST['telepon'] ?>
                    </td>
                </tr>

                <tr>
                    <td>Foto</td><td>: </td>
                    <td>
                    <?php echo $_POST['file'] ?>
                    </td>
                </tr>


    </table>
    </form>
    </div>
</body>
</html>
<?php
    include 'function.php';

    $ambil = query("SELECT * FROM tb_berita");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}.active {
  background-color: #3d46bf;
}
.isi{
    margin-left: 100px;
    margin-right: 100px;
}
.isi img{
    align-items: center;
}
.footer {
  background-color: #F1F1F1;
  text-align: center;
  padding: 10px;
}

</style>

</head>
<body>
<br><br>
    <!-- <div class="navbar">
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
                    <td>
                        <a href="registrasi.php" style="text-decoration:none" class="tombol">Register</a>
                    </td>
                    <td>
                        <a href="login.php" style="text-decoration:none" class="tombol">Login</a>
                    </td>
                </tr>
            </table>
        </nav>
    </div> -->


    <ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="tambah.php">Tambah</a></li>
    <li><a href="tampil.php">Tampil</a></li>
    <li><a href="register.php">Register</a></li>
    <li style="float:right"><a class="active" href="login.php">Login</a></li>

</ul>

    <hr>

    <div class="isi">
    <table align="center">
        <tr>
            <td>
                <img src="img/lima.jpg" alt="" width="500" height="" align="center">
            </td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($ambil as $row):?>
        

        <br><br>
        <tr>
            <td>
                <h3><?php echo $row ["nama"];?></h3>
            </td>
        </tr>
        <tr>
            <td>
            <p><?php echo $row ["isi"] ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $row ["jenis"]; ?>
                <?php echo  ", "; echo $row ["author"]; ?>
                <?php echo $row ["tahun"]; ?>
            </td>
        </tr>
        
        

        <?php $i++; ?>
        <?php endforeach; ?>
        </table>
    </div>

    <!-- <div class="isi">
    <table align="center" style="width: 1000px;">
        <tr>
            <td rowspan="15" align="center">
                <img src="img/lima.jpg" alt="" width="500" height="">
            </td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($ambil as $row):?>
        
        <tr>
        <td align="center">
                <img src="img/lima.jpg" alt="" width="500" height="">
            </td>
            <td><h3><?php echo $row ["nama"];?></h3></td>
        </tr>
        <tr>
            <td><?php echo $row ["isi"];?></td>
        </tr>
        <tr>
            <td>
                <td><?php echo $row ["jenis"];?></td>
                
            </td>
        </tr>
        <tr>
            <td>
                <td><?php echo $row ["author"];?></td>
                
            </td>
        </tr>
        <tr>
            <td>
                <td><?php echo $row ["tahun"];?></td>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div> -->
    <br><br><br>
    <div class="footer">
            <p align="center">Copyright@Diki 2022</p>
    </div>
</body>
</html>
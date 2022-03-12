<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="project1.php" method="post" align="center">
    <?php
        if(isset($_POST['submit'])){
        $JAM = $_POST['bil'];
        $tot=$JAM*2000;
        $tot1=96000+(($JAM-48)*3000);

        if ($JAM<49)
        {
            echo "Gaji yang didapat $JAM jam = Rp. $tot"; 
        }
        else 
        {
            echo "Gaji yang didapat $JAM jam = Rp. $tot1"; 
        }
        }
    ?><br><br>
    <input type="submit" name="kembali" value="Kembali" class="tombol">
    </form>
</body>
</html>
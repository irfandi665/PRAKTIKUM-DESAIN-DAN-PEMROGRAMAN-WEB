
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
        
        if(isset($_POST['submit'])) {
                $phi = 3.141;
            $jari = $_POST['jari'];
            $tinggi = $_POST['tinggi'];
            $volume = $phi * $jari * $jari * $tinggi;
        
            echo("
            Phi = $phi <br />
            Jari-jari = $jari <br />
            Tinggi = $tinggi <br />
            Volume = $volume
        ");
        }

    ?><br><br>
    <input type="submit" name="kembali" value="Kembali" class="tombol">
</form>
</body>
</html>
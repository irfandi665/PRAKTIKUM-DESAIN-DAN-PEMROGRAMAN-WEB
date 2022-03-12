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
        $tahun = $_POST['bil'];
        if ($tahun%4==0)
        {
            echo "$tahun Tahun Kabisat"; 
        }
        else if($tahun%4!=0)
        {
            echo "$tahun Bukan Tahun Kabisat"; 
        }
        }
    ?><br><br>
    <input type="submit" name="kembali" value="Kembali" class="tombol">

</form>
</body>
</html>
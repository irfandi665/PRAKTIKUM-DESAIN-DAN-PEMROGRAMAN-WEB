<!DOCTYPE HTML>  
<html>
    <style>
        body{
            background-color: blanchedalmond;
            font-family: sans-serif;
        }
    </style>
<head>
</head>

<body> 
    <div class="container" style="width: 70%; margin: auto; padding-top: 10rem;">
        <?php
        // define variables and set to empty values
        $team = $color = $weapon ="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $team = $_POST["team"];
        $color = $_POST["color"];
        $weapon = $_POST["weapon"];
        }
        // $nama=$_POST["nama"];
        // $usia=$_POST["usia"];
        ?>

        <form method="post" style="text-align: left;" action="<?php echo($_SERVER["PHP_SELF"]);?>">
            Pilih Team:
            <input type="radio" name="team" value="t1">1
            <input type="radio" name="team" value="t2">2
            <input type="radio" name="team" value="t3">3<br><br>
            Pilih Warna:
            <input type="radio" name="color" value="Merah">Merah
            <input type="radio" name="color" value="Hijau">Hijau
            <input type="radio" name="color" value="Biru">Biru
            <input type="radio" name="color" value="Hitam">Hitam<br><br>
            Pilih Senjata:
            <input type="radio" name="weapon" value="Mpon  mpon">Mpon  mpon
            <input type="radio" name="weapon" value="Keris">Keris
            <input type="radio" name="weapon" value="Gada rujak polo">Gada rujak polo
            <br><br>
            <input type="submit" name="submit"><br><br>
        </form>

        <hr>
        <?php
        
        echo "<p>Output to Server:<p>";
        // echo "Nama ="; echo $nama; echo "<br>";
        // echo "Usia ="; echo $usia; echo "<br>";
        echo "Team = "; echo $team; echo "<br>";
        echo "Color = "; echo $color; echo "<br>";
        echo "Weapon = "; echo $weapon;
        ?>
        <hr>
    </div>
</body>
</html>
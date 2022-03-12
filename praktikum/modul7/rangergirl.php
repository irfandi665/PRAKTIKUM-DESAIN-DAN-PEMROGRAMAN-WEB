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
        $team = $color = $weapon = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $team = $_POST["team"];
        $color = $_POST["color"];
        $weapon = $_POST["weapon"];
        }
        ?>

        <form method="post" style="text-align: left;" action="<?php echo($_SERVER["PHP_SELF"]);?>">
            Pilih Team:
            <input type="radio" name="team" value="t1">1
            <input type="radio" name="team" value="t2">2
            <input type="radio" name="team" value="t3">3<br><br>
            Pilih Warna:
            <input type="radio" name="color" value="Pink">Pink<br><br>
            Pilih Senjata:
            <input type="radio" name="weapon" value="w1">1 Mpon  mpon
            <input type="radio" name="weapon" value="w2">2 Keris
            <input type="radio" name="weapon" value="w3">3 Gada rujak polo
            <br><br>
            <input type="submit" name="submit"><br><br>
        </form>

        <hr>
        <?php
        echo "<p>Output to Server:<p>";
        echo "Team = "; echo $team; echo "<br>";
        echo "Color = "; echo $color; echo "<br>";
        echo "Weapon = "; echo $weapon;
        ?>
        <hr>
    </div>
</body>
</html>
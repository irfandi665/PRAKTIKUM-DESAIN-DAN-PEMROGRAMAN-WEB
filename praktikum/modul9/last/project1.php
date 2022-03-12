<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/project1.css">
</head>
<body>
    <div class="project1">
    <form action="suhu.php" method="post" align="center">
    <h4>  Konversi Satuan Suhu</h4>
        
        Suhu <input type="text" name="suhu" class=""><br><br>
        Konversi: <br><br>
        <select name="konversi" id="" class="">
            <option value="reamur">Reamur</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select><br><br>

            <!-- <input type="radio" name="konversi" value="reamur" >Reamur<br>
            <input type="radio" name="konversi" value="fahrenheit" >Fahrenheit<br>
            <input type="radio" name="konversi" value="kelvin" >Kelvin<br><br><br> -->
            <input type="submit" name="submit" value="Konversi" class="tombol">
    </form>
    <br>
    <hr>

    <form action="tabung.php" method="post" align="center">
    <h4>Volume Tabung</h4>
        <table align="center">
            <tr>
                <td>Jari Jari :</td>
                <td>
                    <input type="text" name="jari" class="">
                </td>
            </tr>
            <tr>
                <td>Tinggi : </td>
                <td>
                    <input type="text" name="tinggi" class="">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" class="tombol">
                </td>
            </tr>
        </table>
    </form>
    <br><hr>

    <form action="tahun.php" method="post" align="center">
        <h4>Tahun Kabisat</h4>
        Masukkan tahun <input type="text" name="bil" class=""s><br /><br>

        <input type="submit" name="submit" value="Submit" class="tombol"> 
    </form>
    <br><hr><br>


    <form action="gaji.php" method="post" align="center">
        <h4>Jumlah jam kerja selama satu minggu </h4>
        Masukan jam kerja <input type="text" name="bil" class=""><br /><br>

        <input type="submit" name="submit" value="Submit" class="tombol">
    </form>
    </div>
</body>
</html>
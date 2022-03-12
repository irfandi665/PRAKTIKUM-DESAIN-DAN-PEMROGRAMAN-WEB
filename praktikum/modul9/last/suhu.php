 
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
            $suhu=$_POST['suhu'];
            $konversi=$_POST['konversi'];

            echo "Suhu : $suhu °C<br>";

            if($konversi=="reamur"){
                $hasil=(4/5)*$suhu;
                echo " Hasil konversi ke Reamur: $hasil °R";
            }else if($konversi=="fahrenheit"){
                $hasil=(9/5)*$suhu+32;
                echo "Hasil Konversi ke Fahrenheit : $hasil °F";
            }else if($konversi=="kelvin"){
                $hasil=$suhu+273;
                echo "Hasil Konversi ke Kelvin: $hasil °K";
            }else{
                echo "Zonk";
            }
        ?> <br><br>
        <input type="submit" name="kembali" value="Kembali" class="tombol">
        </form>

    </body>
    </html>
    

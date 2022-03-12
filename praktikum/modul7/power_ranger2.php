<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="asset/css/ranger.css">
    </head>
   
    <?php 
       
    ?>
    <body>
        <div class="container">
          <h1>Login</h1>
          <form action="regis.php" method="post" >
            <label>Nama</label><br>
                <input type="text" name="nama"><br>
            <label>Usia</label><br>
                <input type="text" name="usia"><br>
            <label>gender</label>

                <!-- <input type="radio" name="jk" value="1" class="jk"><label for="perempuan">Perempuan</label>
				<input type="radio" name="jk" value="2" class="jk"><label for="lakilaki">Laki-Laki</label> -->

                <select name="jk" id="" class="jk">
                    <option value="1"><label for="perempuan">Perempuan</label></option>
                    <option value="2"><label for="lakilaki">Laki-Laki</label></option>
                </select>

                <input type="submit" value="login">
            </form>
        </div>     
    </body>
</html>
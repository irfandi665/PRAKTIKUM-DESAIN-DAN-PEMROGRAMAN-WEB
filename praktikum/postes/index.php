<?php
    include 'function.php';

    $ambil = query("SELECT * FROM tb_berita");
?>

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.leftcolumn {   
  float: left;
  width: 75%;
}

.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>News</h1>
  <p>Diki Irfandi Rosyid</p>
</div>

<div class="topnav">
 
    <a class="active" href="#home">Home</a>
    <a href="#news">News</a>
    <a href="tambah.php">Tambah</a>
    <a href="tampil.php">Tampil</a>
    <a href="register.php">Register</a>
    <li style="float:right"><a class="active" href="login.php">Login</a>


</div>
<?php $i = 1; ?>
        <?php foreach ($ambil as $row):?>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2><?php echo $row ["nama"];?></h2>
      <h5><?php echo $row ["jenis"]; ?>
                <?php echo  ", "; echo $row ["author"]; ?>
                <?php echo $row ["tahun"]; ?></h5>
      <div class="fakeimg" style="height:200px;"><img src="img/lima.jpg" alt="" style="height:200px;"></div>
      <br>
      <p><?php echo $row ["isi"] ?></p>
    </div>
  </div>
  
</div>
<?php $i++; ?>
        <?php endforeach; ?>
<div class="footer">
  <h2>1910138</h2>
</div>

</body>
</html>



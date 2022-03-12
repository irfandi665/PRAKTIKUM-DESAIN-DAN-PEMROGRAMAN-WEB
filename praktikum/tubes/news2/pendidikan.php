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
    <link rel="stylesheet" href="asset/css/style.css">

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

    li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
    }

    li.dropdown {
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    }

    .dropdown-content a:hover {background-color: #f1f1f1;}

    .dropdown:hover .dropdown-content {
    display: block;
    }
    .footer{
        font-size: 10px;
        padding-top: 1px;
        padding-bottom: 1px;
    }
</style>

</head>
<body>

<div class="header">
    <h1>TELKOM NEWS</h1>
    <p>Berita Seputar ITTP</p>
</div>

<ul>
<li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">News</a>
        <div class="dropdown-content">
        <a href="#">Politik</a>
        <a href="#">Teknologi</a>
        <a href="#">Pendidikan</a>
        <a href="#">Seni</a>
        <a href="#">Olah Raga</a>
        </div>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="registrasi.php">Register</a></li>
    
    </li>
</ul>

<!-- <header class="header">
	<div class="menubar">
        
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#">Contact</a></li>
			<li class="dropdown"><a href="#">News</a>
				<ul class="isi-dropdown">
					<li><a href="#">Sub Menu 1</a></li>
					<li><a href="#">Sub Menu 2</a></li>
					<li><a href="#">Sub Menu 3</a></li>
					<li><a href="#">Sub Menu 4</a></li>
				</ul>
			</li>
			<li><a href="tampil.php" >Login</a></li>
            <li><a href="registrasi.php">Registrasi</a></li>
		</ul>

	</div>
</header> -->

<!-- <div class="topnav">
    <a href="#">Home</a>
    <a href="#">About Me</a>
    <a href="#">Contact</a>
    <a href="#">Update</a>
    <a href="#" style="float:right">Login</a>
</div> -->

<!-- ====Sidebar====================================================== -->

<!-- ===================================================================== -->

<div class="row">
    <div class="leftcolumn">

        <div class="card">
        <?php $nomer=1; ?>
        <?php $ambil=$koneksi ->
        query("select * from tb_berita where id=8"); ?>
        <?php while ($row=$ambil->fetch_assoc()) {?>
            
        <h2><?php echo $row ["judul"];?></h2>
        <h5><?php echo $row ["author"];echo ", "; echo $row ["tahun"];?></h5>
        <div class="fakeimg" style="height:200px;">
        <?php echo "<img src='asset/img/$row[gambar]' height='150' />";?>
        </div>

        <p><?php echo $row ["isi"];?></p>
        </div>
        <?php $nomer++; ?>
        <?php } ?>

        <div class="card">
        <?php $nomer=1; ?>
        <?php $ambil=$koneksi ->
        query("select * from tb_berita where id=9"); ?>
        <?php while ($row=$ambil->fetch_assoc()) {?>
            
        <h2><?php echo $row ["judul"];?></h2>
        <h5><?php echo $row ["author"];echo ", "; echo $row ["tahun"];?></h5>
        <div class="fakeimg" style="height:200px;">
        <?php echo "<img src='asset/img/$row[gambar]' height='150' />";?>
        </div>

        <p><?php echo $row ["isi"];?></p>
        </div>
        <?php $nomer++; ?>
        <?php } ?>

        <div class="card">
        <?php $nomer=1; ?>
        <?php $ambil=$koneksi ->
        query("select * from tb_berita where id=10"); ?>
        <?php while ($row=$ambil->fetch_assoc()) {?>
            
        <h2><?php echo $row ["judul"];?></h2>
        <h5><?php echo $row ["author"];echo ", "; echo $row ["tahun"];?></h5>
        <div class="fakeimg" style="height:200px;">
        <?php echo "<img src='asset/img/$row[gambar]' height='150' />";?>
        </div>

        <p><?php echo $row ["isi"];?></p>
        </div>
        <?php $nomer++; ?>
        <?php } ?>

        <div class="card">
        <?php $nomer=1; ?>
        <?php $ambil=$koneksi ->
        query("select * from tb_berita where id=11"); ?>
        <?php while ($row=$ambil->fetch_assoc()) {?>
            
        <h2><?php echo $row ["judul"];?></h2>
        <h5><?php echo $row ["author"];echo ", "; echo $row ["tahun"];?></h5>
        <div class="fakeimg" style="height:200px;">
        <?php echo "<img src='asset/img/$row[gambar]' height='150' />";?>
        </div>

        <p><?php echo $row ["isi"];?></p>
        </div>
        <?php $nomer++; ?>
        <?php } ?>


    </div>
</body>
</html>



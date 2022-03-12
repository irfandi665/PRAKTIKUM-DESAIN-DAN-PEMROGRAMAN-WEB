<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Pendukung Keputusan</title>

<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
<script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
<script type="text/javascript" src="js/roundabout.js"></script>
<script type="text/javascript" src="js/roundabout_shapes.js"></script>
<script type="text/javascript" src="js/gallery_init.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all">
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/IE9.js"></script>
<![endif]-->
<style type="text/css">
<!--
.style1 {
	font-family: "Comic Sans MS";
	font-size: 120%;
}
.style2 {
	color: #0000FF;
	font-family: "Comic Sans MS";
}
-->
</style>
</head>
<body>
<!-- START PAGE SOURCE -->
<header>
  <div class="container">
    <h1><a href="#">SPK</a></h1>
    <nav>
      <ul>
	   <li><a href="index.php" >Home page</a></li>
			  
               <li><a href="?page=profil" <?php if($_GET[page]=="profil") { echo "class='current'"; } ?>>Profil Swalayan</a></li>
			   <li><a href="?page=alternatif" <?php if($_GET[page]=="alternatif") { echo "class='current'"; } ?>> Alternatif</a></li>
			 <li><a href="?page=kontak" <?php if($_GET[page]=="kontak") { echo "class='current'"; } ?>> Kontak</a></li>
			 <li><a href="./admin" <?php if($_GET[page]=="login") { echo "class='current'"; } ?>> Login</a></li>
        
      </ul>
    </nav>
  </div>
</header>

<div class="main-box">
  <div class="container">
    <div class="inside">
      <div class="wrapper">
        
       
		<marquee><p class="style2">Selamat Datang di Sistem Pendukung Keputusan Pemilihan Alternatif Produk Terbaik</p> 
		</marquee>
		 <?php 
if(!empty($_GET[page])) 
{
	if(file_exists("$_GET[page]")) 
	{
	include("$_GET[page]");
	} else 
	{
	
	}
} else 
{
 include"home.php";
}
?>
<?php 
	  
	   if($_GET[page]=="alternatif") { include "lihat_hasil.php"; }
	   
	   if($_GET[page]=="profil") { include "profil.php"; } 
	   if($_GET[page]=="pemesanan") { include "carapesan.php"; }
	  
	   
	   if($_GET[page]=="kontak") { include "contacts.php"; }
	   
	   
	   
    ?>
          
       
      </div>
    </div>
  </div>
</div>

<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>

<!DOCTYPE html>
<html>
<style>
body{
	background:#96C7C1;
	font-family: poppins;
}
</style>
<head>
	<meta charset="utf-8">
	<title>Hasil</title>
	<link rel="stylesheet" type="text/css" href="css/hasil.css">
</head>
<body>
	<h3 align="center"><font color=black size="10">WELCOME RANGERS</font></h3>
	
		<!-- if(isset($_POST['submit'])){
			
			echo 'Anda adalah salah satu dari tim'.$_POST['tim'];
			echo 'Anda adalah Rangers warna'.$_POST['warna'];
			echo 'Senjatamu adalah'.$_POST['senjata'];
			
		} -->

		<?php echo 'Anda adalah salah satu dari tim :'.$_POST['tim'];echo "<br>" ?>
		<?php echo 'Anda adalah Rangers warna :'.$_POST['warna'];echo "<br>" ?>
		<?php echo 'Senjatamu adalah :'.$_POST['senjata'];echo "<br>" ?>

	
	
	

</body>
</html>
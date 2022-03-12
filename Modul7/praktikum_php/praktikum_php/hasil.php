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
	<?php
	if(isset($_POST['Submit'])){
		echo '<form>';
		echo 'Anda adalah salah satu dari tim'.$_POST['tim'];
		echo 'Anda adalah Rangers warna'.$_POST['warna'];
		echo 'Senjatamu adalah'.$_POST['senjata'];
		echo '</form>';
	}

	?>
	
	

</body>
</html>
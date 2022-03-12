<?php 
echo $_POST ['username']=""."<br>"
	.$_POST ['password']=""."<br>"
 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Masuk</title>
	<link rel="stylesheet" type="text/css" href="css/stylelog.css">
</head>
<body>
	<form action="logpost.php" methods="post">
		<table border=0 align=right>
			<tr><td>Nama </td><td><input type="text" name="username"></td></tr>
			<tr><td>Usia </td><td><input type=varchar name="password"></td></tr>
			<tr><td>Gender </td><td><input type=varchar name="password"></td></tr>
			<tr><td></td><td colspan = "3"><input class="daftar" type="button"onclick="document.location='seleksi.php'" name="kirim"value="Submit"></td></tr>
		</table>
	</form>
	
	<div class="kirim">
	<h3 align="center"><font color=black size="10">Halaman Form Daftar Rangers</font></h3>
	</div>
</body>
</html>
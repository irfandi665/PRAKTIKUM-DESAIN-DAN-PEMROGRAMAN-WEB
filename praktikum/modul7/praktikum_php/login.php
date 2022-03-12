<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/stylelog.css">
</head>
<body>
	<form action="logpost.php" methods="post">
		<table border=0 align=right>
			<tr><td>Username </td><td><input type="text" name="username"></td></tr>
			<tr><td>Password </td><td><input type=varchar name="password"></td></tr>
			<tr><td></td><td colspan = "3"><input class="daftar" type="button"onclick="document.location='logpost.php'" name="kirim"value="Kirim"></td></tr>
		</table>
	</form>
	
	<div class="kirim">
	<h3 align="center"><font color=black size="10">Halaman Login</font></h3>
	</div>
</body>
</html>
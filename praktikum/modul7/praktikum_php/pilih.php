<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pilihan</title>
	<link rel="stylesheet" type="text/css" href="css/pilihan.css">
</head>
<body>
	<h3 align="center"><font color=black size="10">Halaman Form Daftar Rangers</font></h3>
	<form action="hasil.php" method="post">
		<tr>
		<td><p>Pilih Tim Rangers
		</p></td>
		<td><input type="radio" name="tim" value="Mystic Force">Mystic Force</td>
		<td><input type="radio" name="tim" value="Dino">Dino</td>
		<td><input type="radio" name="tim" value="SPD">SPD</td>
		</td></tr>

		<tr>
		<td><p>Pilih Warna Rangers</p>
		<input type="text" name="warna">
		</td></tr>

		<tr>
		<td>
		<p>Pilih Senjata Rangers</p></td></tr>
		<td><input type="radio" name="senjata" value="Vandal">Vandal</td>
		<td><input type="radio" name="senjata" value="Operator">Operator</td>
		<td><input type="radio" name="senjata" value="Phantom">Phantom</td>
		<td><input type="radio" name="senjata" value="Odin">Odin</td>
		<td><input type="radio" name="senjata" value="Spectre">Spectre</td>
		</tr><br><br>

		<tr><td></td><td colspan = "3">
			<input type="submit" value="submit">

		<!-- <input class="daftar" type="button" onclick="document.location='hasil.php'" value="submit"></td></tr> -->
	</form>
	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In</title>
</head>
<body>
	<?php
		$username=$_POST['usr'];
		$password=$_POST['pwd'];
		if($username=="123" && $password=="123"){ 
	?>
		<h2>Anda sudah berhasil login!</h2>		
		<h3>Form Daftar Ranger</h3>
		<form action="power_ranger.php" method="POST">
			<table border="0">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="Masukkan nama"></td>
				</tr>
				<tr>
					<td>Usia</td>
					<td>:</td>
					<td><input type="text" name="umur" placeholder="Masukkan usia"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td>
						<input type="radio" name="gender" value="girl" id="girl"><label for="girl">Perempuan</label>
						<input type="radio" name="gender" value="boy" id="boy"><label for="girl">Laki-Laki</label>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	<?php 
		}else{ ?>
		<h2>Hmp! Anda tidak berhasil masuk!</h2>
		<?php }
	?>
</body>
</html>
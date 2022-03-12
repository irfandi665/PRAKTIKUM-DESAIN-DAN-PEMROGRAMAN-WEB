<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	<link rel="stylesheet" type="text/css" href="asset/css/kalkulator.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $num1+$num2;
			break;
			case 'kurang':
				$hasil = $num1-$num2;
			break;
			case 'kali':
				$hasil = $num1*$num2;
			break;
			case 'bagi':
				$hasil = $num1/$num2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		
		<form method="post" action="kalkulator.php">			
			<input type="text" name="num1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="num2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>

		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>
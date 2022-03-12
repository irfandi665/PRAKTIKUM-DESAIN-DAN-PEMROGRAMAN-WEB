<?php 

$nip= $_POST['nip'];
$nama= $_POST['nama'];
$jabatan= $_POST['jabatan'];
$gapok= "gapok";
$tunjangan= "tunjangan";
$total_= "total";

if ($jabatan == "direktur") {
	$gapok=9000000;
	$tunjangan=$gapok * 0.10;
}elseif ($jabatan == "sekretaris") {
	$gapok=7000000;
	$tunjangan=$gapok *0.05;
}elseif ($jabatan == "staf") {
	$gapok=5000000;
	$tunjangan=$gapok * 0.01;
}else
	echo "gaji anda tidak tahu";
	$total = $gapok + $tunjangan;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="hitung_gaji.php" method="post">
<table>
        <tr>
            <td colspan="2" align="center"><h3>Hasil Perhitungan gaji</h3></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td><input type="text" name=nip id="nip" value="<?php echo $nip ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama" value="<?php echo $nama ?>"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>
            <input type="text" name="jabatan" value="<?php echo $jabatan ?>"></td>
            </td>
        </tr>
        <tr>
            <td>Gaji pokok</td>
            <td><input type="text" name="gapok" value="<?php echo $gapok ?>"></td>
        </tr>
        <tr>
            <td>Tunjangan</td>
            <td><input type="text" name="tunjangan" value="<?php echo $tunjangan ?>"></td>
        </tr>
        <tr>
            <td>Total Gaji</td>
            <td><input type="text" name="total" value="<?php echo $total ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="proses" value="kembali">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
$nama   = $_POST['nama'];
$nim   = $_POST['nim'];
$jk   = $_POST['jk'];
$prodi   = $_POST['prodi'];
$makul  = $_POST['makul'];
$absen  = $_POST['absen'];
$tugas  = $_POST['tugas'];
$uts    = $_POST['uts'];
$uas    = $_POST['uas'];

//menghitung nilai dari yang tadi kita input

$nilai_absen = $absen * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts   = $uts * 0.3;
$nilai_uas   = $uas * 0.4;

//penjumlahan dari nilai-nilai yang sudah diinput

$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

//menampilkan grade berdasarkan hasil nilai akhir

    if ($nilai_akhir>=86) {
        $grade = "A";
    }
    elseif ($nilai_akhir>=76) {
        $grade = "B";
    }
    elseif ($nilai_akhir>=66) {
        $grade = "C";
    }
    elseif ($nilai_akhir>=56) {
        $grade = "D";
    }
    elseif ($nilai_akhir>100) {
        $grade = "Nilai diluar reng";
    }
    else {
    $grade = "E";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mahasiswa2.css">
</head>
<body>
<div class="mahasiswa">
        <form action="hasil_mahasiswa.php" method="post">
        <h1 align="center" class="judul">Hitung Nilai AKhir Mahasiswa</h1>
            <table align="center"> 
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td class="qwe"><?php echo $nama ?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?php echo $nim ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?php echo $jk ?>
                        
                    </td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td>
                        <?php echo $prodi ?>
                    </td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td>:</td>
                    <td><?php echo $makul ?></td>
                </tr>
                <tr>
                    <td>Nilai Absen</td>
                    <td>:</td>
                    <td><?php echo $nilai_absen ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><?php echo $nilai_tugas ?></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><?php echo $nilai_uts ?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><?php echo $nilai_uas ?></td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td><?php echo $nilai_akhir ?></td>
                </tr>
                <tr>
                    <td>Grade</td>
                    <td>:</td>
                    <td><?php echo "<h4>Grade : $grade</h4>" ?></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Hitung" class="tombol"></td>
                </tr>
            </table>
            </form>
    </div>

</body>
</html>

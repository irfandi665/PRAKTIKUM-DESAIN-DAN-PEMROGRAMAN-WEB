<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mahasiswa.css">
</head>
<body>
    <div class="mahasiswa">
        <form action="hasil_mahasiswa.php" method="post">
        <h1 align="center" class="judul">Hitung Nilai AKhir Mahasiswa</h1>
            <table>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" class="bil" name="nama"><br></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" class="bil" name="nim"><br></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" class="jk" value="Laki-laki">Laki-laki
                        <input type="radio" name="jk" class="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td><select name="prodi" class="opt">
                        <option>-Pilih Prodi-</option>
                        <option value="Sistem Informasi"> Sistem Informasi</option>
                        <option value="Informatika"> Informatika</option>
                        <option value="Rekayasa Perangkat Lunak"> Rekayasa Perangkat Lunak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td>:</td>
                    <td><input type="text" class="bil" name="makul"><br></td>
                </tr>
                <tr>
                    <td>Nilai Absen</td>
                    <td>:</td>
                    <td><input type="text" class="bil" name="absen"><br></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="text" class="bil" name="tugas"><br></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="text" class="bil" name="uts"><br> </td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="text" class="bil" name="uas"><br><br></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Hitung" class="tombol"></td>
                </tr>
            </table>
            </form>
    </div>  
</body>
</html>
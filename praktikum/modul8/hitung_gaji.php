<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hasil_gaji.php" method="post">
    <table>
        <tr>
            <td colspan="2" align="center"><h3>Silahkan Input Data Karyawan</h3></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td><input type="text" name=nip id="nip"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>
                <select name="jabatan">
                <option>-Pilih Jabatan-</option>
                <option value="direktur"> direktur</option>
                <option value="sekretaris"> sekretaris</option>
                <option value="staf"> staf</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="proses" value="proses">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
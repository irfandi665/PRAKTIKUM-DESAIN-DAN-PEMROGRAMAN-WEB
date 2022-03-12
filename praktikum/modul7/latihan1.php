<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/latihan1.css">
</head>
<body>
    <div class="form1">
    
    <form action="hasil_latihan1.php" method="post" >
            <table align="center" width="500px">
                <tr>
                    <th align="center" colspan="4" ><h2>Form Pendaftaran</h2></th>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input name="nama" type="text" placeholder="nama">  
                    </td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td>
                        <input name="ttl" type="text" placeholder="nama kota">  
                    </td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                    <td>
                        <input type="date" name="date" id="">
                    </td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="Laki Laki">Laki Laki
                        <br>
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                
            
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea name="isi" id="" cols="30" rows="10" placeholder="Isi disini"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td>Prodi</td>
                    <td>

                        
                        <select name="prodi" id="prodi">
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Telekomunikasi">Telekomunikasi</option>
                        </select>
                        
                    </td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td>
                        <input type="email" name="email" id="" placeholder="abcde@gmail.com">
                    </td>
                </tr>

                <tr>
                    <td>Telepon</td>
                    <td>
                        <input type="number" name="telepon" id="" placeholder="08*********">
                    </td>
                </tr>

                <tr>
                    <td>Foto</td>
                    <td>
                        <input type="file" name="file" id="">
                    </td>
                </tr>


                <tr>
                    <td colspan="3" align="center">
                       <input type="submit" value="Kirim">
                    </td>
                </tr>

    </table>
    </form>
    </div>
</body>
</html>
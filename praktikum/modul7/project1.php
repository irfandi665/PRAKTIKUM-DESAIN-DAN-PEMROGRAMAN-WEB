<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_get.php" method="post">

    <table>
        <tr>
            <td>
                Nama :
            </td>
            <td>
                <input type="text" name="nama" id="">
            </td>
        </tr>
        <tr>
            <td>
                Email :
            </td>
            <td>
                <input type="text" name="email" id="">
            </td>
        </tr>
        <tr>
            <td>
                Alamat :
            </td>
            <td>
                <textarea name="isi" id="" cols="30" rows="6"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="kirim">
            </td>
        </tr>
    </table>
    </form>

</body>
</html>
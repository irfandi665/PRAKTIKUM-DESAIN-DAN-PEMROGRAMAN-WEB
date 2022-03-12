
<?php
//Jalankan dulu session
session_start();
//jika sudah login maka masuk ke tampil.php
if (isset($_SESSION["login"])) {
header("location: tampil.php");
exit;
}
    //buat koneksi terlebihdahlu
    include 'function.php';
    
    if (isset($_POST["login"])) {
		$username=$_POST["username"];
		$password=$_POST["password"];

		$result=mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$username'");

		if (mysqli_num_rows($result)===1) {
			$row=mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])) {
				$_SESSION["login"]=true;
				header("location: tampil.php");
				exit;
			}
		}
		
		$error=true;

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if( isset($error)): ?>
        <p> username / Password Anda Salah, Silahkan Coba Lagi..!</p>
    <?php endif; ?>
<form action="" method="post">
    <table align="center">
        <th colspan="3" align="center">Silahkan login</th>
        <tr>
        <td>Username</td>
        <td><input type="text" name="username" class="bil"></td>
        </tr>
        <tr>
        <td>Password</td>
        <td><input type="text" name="password" class="bil"></td>
        </tr>
        <tr>
        <td>
        <input type="submit" name="login" value="login" class="tombol">
        </td>
        </tr>
    </table>
</form>
</body>
</html>
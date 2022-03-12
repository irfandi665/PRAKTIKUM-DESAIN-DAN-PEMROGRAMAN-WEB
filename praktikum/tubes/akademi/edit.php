<?php
    include 'connect.php';
	header('Content-Type: text/html; charset=utf-8');

	$get_data = mysqli_query($conn, "SELECT * FROM produk WHERE id='$_GET[id]'");
	$data = mysqli_fetch_array($get_data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi CRUD sederhana - Edit</title>

	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Edit Data</h1>

		<form action="proses_edit.php" method="post">
			<div class="form-group">
				<label for="inputAddress">ID</label>
				<input type="text" class="form-control" name="id" readonly value="<?php echo $data['id']; ?>" autocomplete="off">
			</div>
			<div class="form-group">
				<label for="inputAddress">Nama Produk</label>
				<input type="text" class="form-control" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" placeholder="Iphone 6s+, Nike AirForce, dsb.." autocomplete="off" required>
			</div>
			<div class="form-group">
				<label for="inputAddress2">Keterangan</label>
				<input type="text" class="form-control" name="keterangan_produk" value="<?php echo $data['keterangan']; ?>" placeholder="Spesifikasi produk" autocomplete="off" required>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Harga</label>
					<input type="text" class="form-control" name="harga_produk" value="<?php echo $data['harga']; ?>" autocomplete="off" required>
				</div>
					<div class="form-group col-md-6">
					<label for="inputPassword4">Jumlah</label>
					<input type="text" class="form-control" name="jumlah_produk" value="<?php echo $data['jumlah']; ?>" autocomplete="off" required>
				</div>
			</div>

			<a href="http://localhost/crud_arkademy" role="button" class="btn btn-secondary" data-dismiss="modal">Batal</a>
			<button type="submit" class="btn btn-success">Update</a>
		</form>
	</div>
</body>
</html>
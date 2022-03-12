<?php
    include 'connect.php';
	header('Content-Type: text/html; charset=utf-8');
	
	$get_last_id = mysqli_query($conn, "SELECT id FROM produk ORDER BY id DESC LIMIT 1");
	$last_id = mysqli_fetch_array($get_last_id);

?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi CRUD Sederhana</title>
	
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Aplikasi CRUD sederhana</h1>

		<div class="salam">
			Halo! Ini adalah aplikasi web CRUD sederhana yang saya buat menggunakan Bootstrap dan native PHP. <br>
			Aplikasi web ini saya buat untuk memenuhi tugas pada tes seleksi Bootcamp Arkademy. <br>
			Anda bisa gunakan web ini untuk melakukan aksi CRUD pada umumnya. <br>
			Selamat mencoba!
		</div>

		<!-- Modal Tambah Data -->
		<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahData" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalTambahData">Tambah Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="proses_tambah.php" method="post">
							<div class="form-group">
								<label for="inputAddress">ID</label>
								<input type="text" class="form-control" name="id" readonly value="<?php echo $last_id['id'] + 1; ?>">
							</div>
							<div class="form-group">
								<label for="inputAddress">Nama Produk</label>
								<input type="text" class="form-control" name="nama_produk" placeholder="Iphone 6s+, Nike AirForce, dsb.." autocomplete="off" required>
							</div>
							<div class="form-group">
								<label for="inputAddress2">Keterangan</label>
								<input type="text" class="form-control" name="keterangan_produk" placeholder="Spesifikasi produk" autocomplete="off" required>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Harga</label>
									<input type="text" class="form-control" name="harga_produk" autocomplete="off" required>
								</div>
									<div class="form-group col-md-6">
									<label for="inputPassword4">Jumlah</label>
									<input type="text" class="form-control" name="jumlah_produk" autocomplete="off" required>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-primary">Kirim</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama Produk</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Harga</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$produk = mysqli_query($conn, "SELECT * FROM produk");
				$i = 1;
				
				while($data_produk = mysqli_fetch_array($produk)) {
				?>

				<tr>
					<th scope="row"><?php echo $i++ ?></th>
					<td><?php echo $data_produk['nama_produk']; ?></td>
					<td><?php echo $data_produk['keterangan']; ?></td>
					<td><?php echo "Rp. " . number_format($data_produk['harga'],0,',','.'); ?></td>
					<td><?php echo $data_produk['jumlah']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $data_produk['id']; ?>" role="button" class="btn btn-success">Edit</a>
						<a href="#" role="button" class="btn btn-danger btn-hapus" onclick="konfirmasiHapus(this)" data-id="<?php echo $data_produk['id']; ?>">Hapus</a>
					</td>
				</tr>

				<?php
				}
				?>
			</tbody>
		</table>

		<a href="tambah.php" role="button" class="btn btn-primary btn-tambah" data-toggle="modal" data-target="#modalTambahData">Tambah Data</a>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script>
		function konfirmasiHapus(id) {
			var getId = id.getAttribute('data-id');
			var tanya = confirm('Anda yakin ingin menghapus data ini?');
			
			if(tanya == true) {
				window.location.replace("proses_hapus.php?id=" + getId);
			} else {
				return false;
			}
		}
	</script>
</body>
</html>
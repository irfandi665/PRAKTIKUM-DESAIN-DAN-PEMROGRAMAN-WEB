<?php
    include "function.php";
    session_start();
    $kelas = ['SI-03-A', 'SI-03-B','SI-03-C', 'SI-03-D'];
    $sql = "SELECT * FROM data";
    $data = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title>Data Mahasiswa</title>
</head>
<body>
	<div class="container">
		<h2>Input Data Mahasiswa</h2>
		<p>Silahkan input data mahasiswa</p>
		<form action="tambah.php" method="post">
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" name="nama" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="kelas">Kelas:</label>
				<select name="kelas" class="form-control" required>
                    <option value="">--Pilih Kelas--</option>
                    <?php foreach($kelas as $kl) : ?>
                    <option value="<?= $kl; ?>"><?= $kl; ?></option>
                    <?php endforeach; ?>
                </select>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat:</label>
				<input type="text" name="alamat" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</form>


		<h2>Tabel Mahasiswa</h2>
		<p>Data Mahasiswa IT Telkom Purwokerto</p>                
		<div class="table-responsive">          
			<table class="table">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data as $dt) : ?>
					<tr>
						<td><?= $dt['nama']; ?></td>
						<td><?= $dt['kelas']; ?></td>
						<td><?= $dt['alamat']; ?></td>
						<td>
							<a href="" class="btn btn-danger" role="button">Delete
				            </a>
				            <a href="" class="btn btn-success" role="button">Edit
				            </a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
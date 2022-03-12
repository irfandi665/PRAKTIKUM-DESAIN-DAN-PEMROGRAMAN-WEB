<?php
    include 'connect.php';

	if(empty($_POST['nama_produk']) || empty($_POST['keterangan_produk']) || empty($_POST['harga_produk']) || empty($_POST['jumlah_produk'])) {
		?>
		<script>
		alert('Mohon lengkapi data terlebih dahulu!');
		window.location.replace("http://localhost/crud_arkademy/");
		</script>
		<?php
	} else {
		$tambah = mysqli_query($conn, "INSERT INTO produk (id, nama_produk, keterangan, harga, jumlah) values ('$_POST[id]','$_POST[nama_produk]', '$_POST[keterangan_produk]', '$_POST[harga_produk]', '$_POST[jumlah_produk]')");
		if($tambah) {
			?>
			<script>
				alert('Data berhasil ditambahkan!')
				window.location.replace("http://localhost/crud_arkademy");
			</script>
			<?php
		}
		else {
			printf("Error: %s\n", mysqli_error($conn));
			exit();
		}
	}
?>
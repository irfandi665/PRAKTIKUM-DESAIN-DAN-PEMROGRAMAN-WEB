<?php
	include 'connect.php';

	if(empty($_POST['nama_produk']) || empty($_POST['keterangan_produk']) || empty($_POST['harga_produk']) || empty($_POST['jumlah_produk'])) {
		?>
		<script>
		alert('Mohon lengkapi data terlebih dahulu!');
		window.location.replace("http://localhost/crud_arkademy/edit.php?id=<?php echo $_POST['id']; ?>");
		</script>
		<?php
	} else {
		$update = mysqli_query($conn, "UPDATE produk SET nama_produk='$_POST[nama_produk]', keterangan='$_POST[keterangan_produk]', harga='$_POST[harga_produk]', jumlah='$_POST[jumlah_produk]' WHERE id='$_POST[id]'");

		if($update) {
			?>
			<script>
				alert('Data berhasil diupdate!')
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
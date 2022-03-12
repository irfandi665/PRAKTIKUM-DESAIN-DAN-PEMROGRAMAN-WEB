<?php
    include 'connect.php';

	$hapus = mysqli_query($conn, "DELETE FROM produk where id='$_GET[id]'");

	if($hapus) {
		?>
		<script>
			alert('Data berhasil dihapus!')
			window.location.replace("http://localhost/crud_arkademy");
		</script>
		<?php
	}
	else {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
?>
<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM produk";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>

<div class="panel panel-default">
	<div class="panel-heading">
		Data Hasil Proses SPK
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th><div align="center">No</div></th>
					<th><div align="center">Kode Produk </div></th>
						<th><div align="center">Nama Produk </div></th>
						<th><div align="center">Khasiat</div></th>
						<th><div align="center">Kadar</div></th>
						<th><div align="center">Aroma</div></th>
						
						
						
						
					</tr>
				</thead>
			<?php
				$pasienSql = "SELECT * FROM produk ORDER BY hasil DESC LIMIT 0,3";
				$pasienQry = mysql_query($pasienSql, $server)  or die ("Query pasien salah : ".mysql_error());
				$nomor  = 0; 
				while ($pasien = mysql_fetch_array($pasienQry)) {
				$nomor++;
				
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><div align="center" ><?php echo $pasien['kode'];?></div></td>
						<td><div ><?php echo $pasien['nama'];?></div></td>
						<td><div align="center"><?php echo $pasien['khasiat'];?></div></td>
						<td><div align="center"><?php echo $pasien['kadar'];?></div></td>
						<td><div align="center"><?php echo $pasien['aroma'];?></div></td>
						
						
					
					</tr>
				</tbody>
			<?php } ?>
					
			</table>
			<a href="laporan.php" class="btn btn-primary btn-rect" target="_blank"><i class='icon icon-white icon-print'></i> Cetak</a><p>
		</div>
	</div>
</div>
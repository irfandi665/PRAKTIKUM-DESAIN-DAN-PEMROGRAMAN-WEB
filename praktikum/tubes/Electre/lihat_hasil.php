<?php
include_once("koneksi.php");


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
		<h2 align="center">Data Hasil Proses SPK</h2><hr>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table align="center" border="1" width="100%">
				<thead>
					<tr>
					<th height="36" ><div align="center">No</div></th>
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
						<td height="40"><div align="center"><?php echo $nomor;?></div></td>
						<td><div align="center" ><?php echo $pasien['kode'];?></div></td>
						<td><div align="center"><?php echo $pasien['nama'];?></div></td>
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
<br><br><br><br><br><br><br><br><br><br><br><br>
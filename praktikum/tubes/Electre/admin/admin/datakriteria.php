<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM kriteria";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<a href="?menu=tambah_kriteria" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah</a><p>
<div class="panel panel-default">
	<div class="panel-heading">
		Data Kriteria
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th><div align="center">No</div></th>
					<th><div align="center">Kode Kriteria </div></th>
						<th><div align="center">Nama Kriteria</div></th>
						
						
						<th><div align="center">Aksi</div></th>
					</tr>
				</thead>
			<?php
				$pasienSql = "SELECT * FROM kriteria ORDER BY id_kriteria ASC LIMIT $hal, $row";
				$pasienQry = mysql_query($pasienSql, $server)  or die ("Query pasien salah : ".mysql_error());
				$nomor  = 0; 
				while ($pasien = mysql_fetch_array($pasienQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><div align="center" ><?php echo $pasien['kode'];?></div></td>
						<td><div ><?php echo $pasien['nm_kriteria'];?></div></td>
						
						
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_kriteria&aksi=hapus&nmr=<?php echo $pasien['id_kriteria']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  <a href="?menu=edit_kriteria&aksi=edit&nmr=<?php echo $pasien['id_kriteria']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>						  </div>						</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="10" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=datasiswa&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>
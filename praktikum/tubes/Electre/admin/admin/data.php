<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM data where pembina='$_SESSION[namalengkap]'";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?> <p>
<div class="panel panel-default">
	<div class="panel-heading">
		<p>List Data	</p>
		
		
	</div>
	<div class="panel-body">
		<div class="table-responsive" >
		<table width="100%" border="1"  class="table table-striped table-bordered table-hover">
          <tr>
            <td width="47"><div align="center"><strong>No</strong></div></td>
           <td width="153"><div align="center"><strong>Nama </strong></div></td>
            <td width="153"><div align="center"><strong>No. Tlpn </strong></div></td>
            <td width="112"><div align="center"><strong>Kode Cabang </strong></div></td>
			<td width="112"><div align="center"><strong>Pembina</strong></div></td>
		
			<td width="112"><div align="center"><strong>Nama Perusahaan </strong></div></td>
			<td width="112"><div align="center"><strong>Aksi </strong></div></td>
			
          </tr>
		  <?php
				$pasienSql = "SELECT * FROM data where npp='$_SESSION[npp]'";
				$pasienQry = mysql_query($pasienSql, $server)  or die ("Query pasien salah : ".mysql_error());
				$nomor  = 0; 
				while ($pasien = mysql_fetch_array($pasienQry)) {
				$nomor++;
			?>
          <tr>
           <td><?php echo $nomor;?></td>
		   <td><?php echo $pasien['nm_kontak'];?></td>
		    <td><?php echo $pasien['telp4'];?></td>
            <td><?php echo $pasien['kd_cabang'];?></td>
            <td><?php echo $pasien['pembina'];?></td>
           
            <td><?php echo $pasien['nm_perusahaan'];?></td>
           
            <td> 
<a href="?menu=detail&aksi=edit&nmr=<?php echo $pasien['id']; ?>" class="btn btn-xs btn-primary tipsy-kiri-atas" title='Detail'> <i class="icon-list icon-white"></i> </a>	
<a href="?menu=edit_data&aksi=edit&nmr=<?php echo $pasien['id']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>	
 </td>
          </tr>
		  <?php } ?>
        
			
			
				
						 			
			
					<tr>
						<td colspan="31" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=setor&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
		  </table>
		</div>
	</div>
</div>
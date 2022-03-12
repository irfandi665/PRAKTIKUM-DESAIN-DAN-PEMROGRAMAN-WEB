<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from data where id='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			mysql_query("update data set kanwil='".$_POST["kanwil"]."',  kd_kantor='".$_POST["kd_kantor"]."',  kd_cabang='".$_POST["kd_cabang"]."', pembina='".$_POST["nama"]."', npp='".$_POST["npp"]."', divisi='".$_POST["divisi"]."', nm_perusahaan='".$_POST["nm_perusahaan"]."', alamat='".$_POST["alamat"]."', kd_area1='".$_POST["area1"]."', telp1='".$_POST["telp1"]."', kd_area2='".$_POST["area2"]."', telp2='".$_POST["telp2"]."', kd_area3='".$_POST["area3"]."', telp3='".$_POST["telp3"]."', email_perusahaan='".$_POST["email_perusahaan"]."', nm_kontak='".$_POST["nm_kontak"]."', jabatan='".$_POST["jabatan"]."', telp4='".$_POST["telp4"]."', email_kontak='".$_POST["email"]."', kec='".$_POST["kec"]."', kab='".$_POST["kab"]."', kd_pos='".$_POST["kd_pos"]."', prov='".$_POST["prov"]."' where id='".$_GET["nmr"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=data'>";
			
	}
?>
<div class="box">

	<header>
		<h5>Edit Data</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Kanwil</label>
							<div class="col-lg-4">
								<input type="text" name="kanwil" value="<?php echo $editDb["kanwil"];?>" required class="form-control" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kode Kantor</label>
							<div class="col-lg-4">
								<input type="text" name="kd_kantor" value="<?php echo $editDb["kd_kantor"];?>" required class="form-control" readonly/>
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp1">Kode Cabang</label>
							<div class="col-lg-4">
								<input type="text" required name="kd_cabang" value="<?php echo $editDb["kd_cabang"];?>" class="form-control" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Pembina</label>
							<div class="col-lg-4">
								<input type="text" required name="nama" value="<?php echo $editDb["pembina"];?>" class="form-control" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">NPP</label>
							<div class="col-lg-4">
								<input type="text" required name="npp" value="<?php echo $editDb["npp"];?>" class="form-control" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Divisi</label>
							<div class="col-lg-4">
								<input type="text" required name="divisi" value="<?php echo $editDb["divisi"];?>" class="form-control" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Perusahaan</label>
							<div class="col-lg-4">
								<input type="text" required name="nm_perusahaan" value="<?php echo $editDb["nm_perusahaan"];?>" class="form-control" readonly/>
							</div>
						</div>
							<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" required name="alamat" value="<?php echo $editDb["alamat"];?>" class="form-control" />
							</div>
						</div>
							<div class="form-group">
							<label class="control-label col-lg-4">Kode Area 1</label>
							<div class="col-lg-4">
								<input type="text" required name="area1" value="<?php echo $editDb["kd_area1"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Telp 1</label>
							<div class="col-lg-4">
								<input type="text" required name="telp1" value="<?php echo $editDb["telp1"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kode Area 2</label>
							<div class="col-lg-4">
								<input type="text" required name="area2" value="<?php echo $editDb["kd_area2"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Telp 2</label>
							<div class="col-lg-4">
								<input type="text" required name="telp2" value="<?php echo $editDb["telp2"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kode Area 3</label>
							<div class="col-lg-4">
								<input type="text" required name="area3" value="<?php echo $editDb["kd_area3"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Telp 3</label>
							<div class="col-lg-4">
								<input type="text" required name="telp3" value="<?php echo $editDb["telp3"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Email Perusahaan</label>
							<div class="col-lg-4">
								<input type="text" required name="email_perusahaan" value="<?php echo $editDb["email_perusahaan"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Kontak</label>
							<div class="col-lg-4">
								<input type="text" required name="nm_kontak" value="<?php echo $editDb["nm_kontak"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jabatan</label>
							<div class="col-lg-4">
								<input type="text" required name="jabatan" value="<?php echo $editDb["jabatan"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Telp 4</label>
							<div class="col-lg-4">
								<input type="text" required name="telp4" value="<?php echo $editDb["telp4"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Email</label>
							<div class="col-lg-4">
								<input type="text" required name="email" value="<?php echo $editDb["email_kontak"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kec</label>
							<div class="col-lg-4">
								<input type="text" required name="kec" value="<?php echo $editDb["kec"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kab</label>
							<div class="col-lg-4">
								<input type="text" required name="kab" value="<?php echo $editDb["kab"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kode Pos</label>
							<div class="col-lg-4">
								<input type="text" required name="kd_pos" value="<?php echo $editDb["kd_pos"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Prov</label>
							<div class="col-lg-4">
								<input type="text" required name="prov" value="<?php echo $editDb["prov"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=data" class="btn btn-warning">Batal</a>
						</div>

					</form>
	</div>
</div>
<?php } ?>
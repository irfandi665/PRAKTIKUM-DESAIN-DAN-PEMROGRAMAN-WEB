<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from siswa where nis='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			mysql_query("update siswa set nis='".$_POST["nis"]."', nama='".$_POST["nama"]."',  kelas='".$_POST["kelas"]."', ipa='".$_POST["ipa"]."', ips='".$_POST["ips"]."', psikotest='".$_POST["psikotest"]."', mipa='".$_POST["mipa"]."', mips='".$_POST["mips"]."' where nis='".$_GET["nmr"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=datasiswa'>";
			
	}
?>
<div class="box">

	<header>
		<h5>Data Siswa</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Nis</label>
							<div class="col-lg-4">
								<input type="text" name="nis" value="<?php echo $editDb["nis"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Siswa</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["nama"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kelas</label>
							<div class="col-lg-4">
								<input type="text" name="kelas" value="<?php echo $editDb["kelas"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nilai Rata-Rata IPA</label>
							<div class="col-lg-4">
								<input type="text" name="ipa" value="<?php echo $editDb["ipa"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nilai Rata-Rata IPS</label>
							<div class="col-lg-4">
								<input type="text" name="ips" value="<?php echo $editDb["ips"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nilai Psikotest</label>
							<div class="col-lg-4">
								<input type="text" name="psikotest" value="<?php echo $editDb["psikotest"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Minat IPA</label>
							<div class="col-lg-4">
								<input type="text" name="mipa" value="<?php echo $editDb["mipa"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Minat IPS</label>
							<div class="col-lg-4">
								<input type="text" name="mips" value="<?php echo $editDb["mips"];?>" required class="form-control" />
							</div>
						</div>
						
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=datasiswa" class="btn btn-warning">Batal</a>
						</div>

					</form>
	</div>
</div>
<?php } ?>
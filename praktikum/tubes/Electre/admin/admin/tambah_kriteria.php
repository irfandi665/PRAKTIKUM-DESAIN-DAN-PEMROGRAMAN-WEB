<?php
session_start();
include_once("../library/koneksi.php");


	if($_POST["pasien"]){
			

			mysql_query("insert into kriteria set kode='".$_POST["nis"]."', nm_kriteria='".$_POST["nama"]."'");
			 echo"<script>alert('Data Anda Sukses Tersimpan');window.location.href='?menu=datakriteria'</script>";
			
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">

	<header>
		<h5>Data Kriteria</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Kode</label>
							<div class="col-lg-4">
								<input type="text" name="nis" autofocus required class="form-control"  />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Kriteria</label>
							<div class="col-lg-4">
								<input type="text" name="nama" autofocus required class="form-control" />
							</div>
						</div>
						
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=datakriteria" class="btn btn-warning">Back</a>
						</div>

					</form>
	</div>
</div>
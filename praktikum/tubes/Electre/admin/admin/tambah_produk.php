<?php
session_start();
include_once("../library/koneksi.php");


	if($_POST["pasien"]){
			if($_POST[khasiat]=='Sangat Baik'){
				$khasiat='5';
				} else if($_POST[khasiat]=='Baik'){
				$khasiat='3';
				} else {
				$khasiat='1';
				}
				
				if($_POST[kadar]=='Sangat Baik'){
				$kadar='5';
				} else if($_POST[kadar]=='Baik'){
				$kadar='3';
				} else {
				$kadar='1';
				}
				
				if($_POST[aroma]=='Sangat Baik'){
				$aroma='5';
				} else if($_POST[aroma]=='Baik'){
				$aroma='3';
				} else {
				$aroma='1';
				}
				
				if($_POST[nama]=='Biore'){
				$nama='10';
				} else if($_POST[nama]=='Citra'){
				$nama='8';
				} else if($_POST[nama]=='Oriflame'){
				$nama='5';
				} else {
				$nama='1';
				}
				$hasil=($khasiat*5)+($kadar*4)+($aroma*3);
				$tot_hasil=$hasil*$nama;
				

			mysql_query("insert into produk set kode='".$_POST["nis"]."', nama='".$_POST["nama"]."', khasiat='".$_POST["khasiat"]."', kadar='".$_POST["kadar"]."', aroma='".$_POST["aroma"]."',hasil='".$tot_hasil."'");
			echo"<script>alert('Data Anda Sukses Tersimpan');window.location.href='?menu=dataproduk'</script>";
			
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">

	<header>
		<h5>Data Produk</h5>
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
							<label class="control-label col-lg-4">Nama Produk</label>
							<div class="col-lg-4">
								<input type="text" name="nama" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Khasiat</label>
							<div class="col-lg-4">
								<select name="khasiat" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Sangat Baik">Sangat Baik</option>
								<option value="Baik">Baik</option>
								<option value="Cukup">Cukup</option>
								<option value="Buruk">Buruk</option>
								<option value="Sangat Buruk">Sangat Buruk</option></select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kadar</label>
							<div class="col-lg-4">
								<select name="kadar" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Sangat Baik">Sangat Baik</option>
								<option value="Baik">Baik</option>
								<option value="Cukup">Cukup</option>
								<option value="Buruk">Buruk</option>
								<option value="Sangat Buruk">Sangat Buruk</option></select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Aroma</label>
							<div class="col-lg-4">
							<select name="aroma" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Sangat Baik">Sangat Baik</option>
								<option value="Baik">Baik</option>
								<option value="Cukup">Cukup</option>
								<option value="Buruk">Buruk</option>
								<option value="Sangat Buruk">Sangat Buruk</option></select>
							</div>
						</div>
						
						
											
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=dataproduk" class="btn btn-warning">Back</a>
						</div>

					</form>
	</div>
</div>
<?php
include_once("../library/koneksi.php");
  // Statistik user
  $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
  $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
  $waktu   = time(); // 

  // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
  $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
  // Kalau belum ada, simpan data user tersebut ke database
  if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
  } 
  

  $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
  $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0); 
  $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal")); 
  $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $bataswaktu       = time() - 300;
  $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));

  $path = "counter/";
  $ext = ".png";

  $tothitsgbr = sprintf("%06d", $tothitsgbr);
  for ( $i = 0; $i <= 9; $i++ ){
	   $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
  }
$sqlhal = mysql_query("select * from nasabah");
		$sqldat = mysql_query("select * from user_pengunjung");
		$jmldata = mysql_num_rows($sqlhal);
		$jmldat = mysql_num_rows($sqldat);

  ?>
<table width="27%" align="center" class='table table-bordered table-striped'>
  <tr><td width="13%"><span class="style2">Pengunjung Online</span></td> 
  <td width="87%"><span class style="color:#EA1C1C;"><?php echo $pengunjungonline ?></span> <span class="style2">Orang </span></td>
  <tr><td><span class="style2">Kunjungan Hari Ini</span></td>
  <td> <span class style="color:#EA1C1C;"><?php echo $hits['hitstoday'];?></span> / <?php echo $totalhits ?></td></tr>
  
  <tr><td><span class="style2">Total Member</span></td>
  <td> <span class style="color:#EA1C1C;"> <?php echo $jmldata ?></td></tr>
   </table>
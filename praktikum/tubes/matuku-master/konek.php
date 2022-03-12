<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "db_matuku";


$koneksi = mysqli_connect($host, $user, $password, $db) or die("<b>Gagal Konek: </b>".mysqli_error($koneksi));

?>
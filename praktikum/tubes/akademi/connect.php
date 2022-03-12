<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $db         = "arkademy";

    $conn = mysqli_connect($servername, $username, $password) or die ("Maaf gagal terhubung dengan Database");
    
    mysqli_select_db($conn, $db);
?>
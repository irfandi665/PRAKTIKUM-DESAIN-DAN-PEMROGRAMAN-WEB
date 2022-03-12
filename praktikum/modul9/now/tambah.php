<?php
    include "function.php";
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT into data(nama, kelas, alamat) VALUES('$nama','$kelas','$alamat')";
    $add = $conn->query($sql);
    
    if($add) {
        $conn->close();
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        $conn->close();
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }
?>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// MySQLi Object-Oriented
// Create connection 
// $conn = mysqli_connect($servername, $username, $password);

$conn = mysqli_connect("localhost","root","", "db_karyawan");

function query($query){
    global $conn;
    $ambil = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($ambil)) {
        $rows[] = $row;
    }
    return $rows;
}

// Function SImpan
    // function simpan($data){
    //     global $conn;

    //     $nip = htmlspecialchars($data["nip"]);
    //     $nama = htmlspecialchars($data["nama"]);
    //     $alamat = htmlspecialchars($data["alamat"]);

    //     $query = "INSERT INTO tb_karyawan values ('','$nip','$nama','$alamat')";

    //     mysqli_query($conn, $query);

    //     return mysqli_affected_rows($conn);
    // }

    function simpan($data){
        global $conn;

        $nip=htmlspecialchars($data["nip"]);
        $Nama=htmlspecialchars($data["nama"]);
        $Alamat=htmlspecialchars($data["alamat"]);

        $query="INSERT INTO tb_karyawan VALUES ('','$nip','$Nama','$Alamat')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

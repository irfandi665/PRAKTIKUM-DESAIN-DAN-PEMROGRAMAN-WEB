<?php 
    $koneksi=mysqli_connect("localhost","root","","warehouse");


    function query($query){
        global $koneksi;
        $ambil=mysqli_query($koneksi,$query);
        $rows=[];
        while ($row=mysqli_fetch_assoc($ambil)){
            $rows[]=$row;
        }
        return $rows;
    }

    //fungsi simpan
    function simpan($data){
        global $koneksi;

        $nama=htmlspecialchars($data["nama"]);
        $berat=htmlspecialchars($data["berat"]);
        $kategori=htmlspecialchars($data["kategori"]);
        $harga=htmlspecialchars($data["harga"]);
        $asal=htmlspecialchars($data["asal"]);
        

        $query="INSERT INTO tb_praktikum9 VALUES 
        ('','$nama', '$berat','$kategori','$harga', '$asal')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function hapus($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM tb_praktikum9 where id = $id");
        return mysqli_affected_rows($koneksi);
        }

        function ubah($data){
            global $koneksi;
    
            $id = $data["id"];
            $nama=htmlspecialchars($data["nama"]);
            $berat=htmlspecialchars($data["berat"]);
            $kategori=htmlspecialchars($data["kategori"]);
            $harga=htmlspecialchars($data["harga"]);
            $asal=htmlspecialchars($data["asal"]);
    
            $query = "UPDATE tb_praktikum9 SET
            nama = '$nama',
            berat = '$berat',
            kategori = '$kategori',
            harga = '$harga',
            asal = '$asal'
            WHERE id = $id
            ";
    
            mysqli_query($koneksi, $query);
    
            return mysqli_affected_rows($koneksi);
        }

?>

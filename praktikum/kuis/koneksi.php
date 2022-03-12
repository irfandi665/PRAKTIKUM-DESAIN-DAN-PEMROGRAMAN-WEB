<?php 
    $koneksi=mysqli_connect("localhost","root","","db_diki");


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
        $alamat=htmlspecialchars($data["alamat"]);
        $jk=htmlspecialchars($data["jk"]);
        $agama=htmlspecialchars($data["agama"]);
        

        // mysqli_query($koneksi, "INSERT INTO tb_pendaftaran VALUES  
        // ('','$nama', '$alamat', '$jk', '$agama')");


        $query="INSERT INTO tb_pendaftaran VALUES 
        ('','$nama', '$alamat', '$jk', '$agama')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function hapus($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM tb_pendaftaran where id = $id");
        return mysqli_affected_rows($koneksi);
        }
        
        //Edit
        // function ubah($data){
        //     global $koneksi;
    
        //     $id = $data["id"];
        //     $nama=htmlspecialchars($data["nama"]);
        //     $alamat=htmlspecialchars($data["alamat"]);
        //     $jk=htmlspecialchars($data["jk"]);
        //     $agama=htmlspecialchars($data["agama"]);
    
        //     $query = "UPDATE tb_pendaftaran SET
        //     nama = '$nama',
        //     alamat = '$alamat',
        //     jk = '$jk',
        //     agama = '$agama
        //     WHERE id = $id
        //     ";
    
        //     mysqli_query($koneksi, $query);
    
        //     return mysqli_affected_rows($koneksi);
        // }

        function ubah($data){
            global $koneksi;
            $id =$data["id"];
            $nama = htmlspecialchars($data["nama"]);
            $alamat = htmlspecialchars($data["alamat"]);
            $jk = htmlspecialchars($data["jk"]);
            $agama = htmlspecialchars($data["agama"]);
        
            $query ="UPDATE tb_pendaftaran SET 
            nama='$nama', alamat='$alamat',jk='$jk', agama='$agama' WHERE id=$id ";
            mysqli_query($koneksi, $query);
            return mysqli_affected_rows($koneksi);
        }

?>

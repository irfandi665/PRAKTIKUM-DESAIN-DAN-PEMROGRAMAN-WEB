<?php 
    $koneksi=mysqli_connect("localhost","root","","db_karyawan");


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

        $nip=htmlspecialchars($data["nip"]);
        $nama=htmlspecialchars($data["nama"]);
        $alamat=htmlspecialchars($data["alamat"]);

        $query="INSERT INTO tb_karyawan VALUES ('','$nip','$nama','$alamat')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function hapus($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM tb_karyawan where id = $id");
        return mysqli_affected_rows($koneksi);
        }

        function ubah($data){
            global $koneksi;
    
            $id = $data["id"];
            $nip = htmlspecialchars($data["nip"]);
            $nama = htmlspecialchars($data["nama"]);
            $alamat = htmlspecialchars($data["alamat"]);
    
            $query = "UPDATE tb_karyawan SET
            nip = '$nip',
            nama = '$nama',
            alamat = '$alamat'
            WHERE id = $id
            ";
    
            mysqli_query($koneksi, $query);
    
            return mysqli_affected_rows($koneksi);
        }
    
?>

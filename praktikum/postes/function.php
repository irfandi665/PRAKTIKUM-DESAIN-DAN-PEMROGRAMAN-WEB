<?php 
    $koneksi=mysqli_connect("localhost","root","","db_berita");


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
        $isi=htmlspecialchars($data["isi"]);
        $jenis=htmlspecialchars($data["jenis"]);
        $author=htmlspecialchars($data["author"]);
        $tahun=htmlspecialchars($data["tahun"]);
        

        $query="INSERT INTO tb_berita VALUES 
        ('','$nama', '$isi', '$jenis','$author', '$tahun')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function hapus($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM tb_berita where id = $id");
        return mysqli_affected_rows($koneksi);
        }

        function ubah($data){
            global $koneksi;
    
            $id = $data["id"];
            $nama=htmlspecialchars($data["nama"]);
            $isi=htmlspecialchars($data["isi"]);
            $jenis=htmlspecialchars($data["jenis"]);
            $author=htmlspecialchars($data["author"]);
            $tahun=htmlspecialchars($data["tahun"]);
    
            $query = "UPDATE tb_berita SET
            nama = '$nama',
            isi = '$isi',
            jenis = '$jenis',
            author = '$author',
            tahun = '$tahun'
            WHERE id = $id
            ";
    
            mysqli_query($koneksi, $query);
    
            return mysqli_affected_rows($koneksi);
        }

        //buat fuanction registrasi
    function registrasi($data){
        global $koneksi;
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($koneksi,$data["password"]);
        $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);
        
        //cek apakah username sudah ada atau belum
        $result = mysqli_query($koneksi, "SELECT username FROM tb_admin WHERE username =
        '$username'");
        
        if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
        alert('username sudah terdaftar, Silahkan Coba lagi.');
        </script>
        ";
        return false;
        }
        //cek konfirmasi password
        if ($password !== $password2) {
        echo "<script>
        alert('Konfirmasi password tidak sesuai, Cobalagi');
        </script>";
        return false;
        }
        //enkripsi password (ada dua yaitu md5 dan hash )
        $password = password_hash($password, PASSWORD_DEFAULT);
        //tambahkan user baru ke data base
        mysqli_query($koneksi, "INSERT INTO tb_admin values
        ('','$username','$password')");
        return mysqli_affected_rows($koneksi);
        }

?>

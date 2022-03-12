<?php 
    $koneksi=mysqli_connect("localhost","root","","db_tubes");


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

        $judul=htmlspecialchars($data["judul"]);
        $isi=htmlspecialchars($data["isi"]);
        $jenis=htmlspecialchars($data["jenis"]);
        $author=htmlspecialchars($data["author"]);
        $tahun=htmlspecialchars($data["tahun"]);
        // $gambar=htmlspecialchars($data["gambar"]);
        
        //upload gambar dahulu
        $gambar = upload();
        if (!$gambar) {
        return false;
        }

        $query="INSERT INTO tb_berita VALUES 
        ('','$judul', '$isi', '$jenis','$author', '$tahun', '$gambar')";

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
            $judul=htmlspecialchars($data["judul"]);
            $isi=htmlspecialchars($data["isi"]);
            $jenis=htmlspecialchars($data["jenis"]);
            $author=htmlspecialchars($data["author"]);
            $tahun=htmlspecialchars($data["tahun"]);
            $gambar=htmlspecialchars($data["gambar"]);
    
            $query = "UPDATE tb_berita SET
            judul = '$judul',
            isi = '$isi',
            jenis = '$jenis',
            author = '$author',
            tahun = '$tahun',
            gambar = '$gambar'
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
        $result = mysqli_query($koneksi, "SELECT username FROM tb_login WHERE username =
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
        mysqli_query($koneksi, "INSERT INTO tb_login values
        ('','$username','$password')");
        return mysqli_affected_rows($koneksi);
        }

    function upload(){
        //ambil dulu file yang di kirim dengan $_FILES
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        //cek apakah tidak ada gambar yg di upload
    if ($error === 4) {
        echo " <script>;
        
        alert ('pilih gambar dahulu');
        </script>;";
        
        return false;
        }
        //cek apakah yang di upload gambar atau bukan
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end ($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo " <script>;
        
        alert ('yang anda upload bukan gambar');
        </script>;";
        
        return false;
        }
        // cek jika ukuran terlalu besar
        if ($ukuranFile > 2000000) {
        echo " <script>
        
        alert ('ukuran terlalu besar, ganti yang lain atau
        
        rubah ukuran');
        
        </script>;";
        return false;
        }
        //jika upload lolos
        //generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .='.';
        $namaFileBaru.= $ekstensiGambar;
        
        move_uploaded_file($tmpName, 'asset/img/'.$namaFileBaru);
        return $namaFileBaru;

        }

        
?>

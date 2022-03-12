<?php
    include 'koneksi.php';
        $id = $_GET["id"];
    if (hapus ($id)) {
    echo "
        <script>
        alert('data berhasil di hapus');
        document.location.href = 'list-siswa.php';
        </script>
        ";
    }else {
    echo "
        <script>
        alert('data gagal di hapus');
        document.location.href = 'list-siswa.php';
        </script>
    ";
}
?>
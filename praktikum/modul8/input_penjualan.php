<html>
<head>
    <style>
        Body{
            text-align: center;
        }
    </style>
    <title>Menghitung Total Bayar </title>
    <link rel="stylesheet" href="css/penjualan.css">
</head>
<body>
    <div class="penjualan">
    <h1>Form Hitung Total Bayar</h1>
    <form action="hasil_penjualan.php" method="post">
        <table align="center">
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td>
                    <select class="opt" name="barang" id="">
                        <option value="">-Buah-</option>
                        <option value="Mangga">Mangga</option>
                        <option value="Pisang">Pisang</option>
                        <option value="Semangka">Semangka</option>
                        <option value="Jeruk">Jeruk</option>
                        <option value="Apel">Apel</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select class="opt" name="status" id="">
                        <option value="Pelanggan">Pelanggan</option>
                        <option value="Bukan Pelanggan">Bukan Pelanggan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td>
                    <select class="opt" name="kota" id="">
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Lain">Lain</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <select class="opt" name="qty">
                        <option value="">- Jumlah -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="hitung" value="Hitung"class="tombol">
                    <input type="reset" name="reset" value="Reset"class="tombol">
                </td>
            </tr>
        </table>
    </form>
    <br><br><br>
    </div>
    <hr />

    <div class="foot">
    <table align="center">
        <h4>*Diskon</h4>
        <tr>
            <td>Pelanggan</td>
            <td>:</td>
            <td>10%</td>
        </tr>
        <tr>
            <td>Bukan Pelanggan</td>
            <td>:</td>
            <td>5%</td>
        </tr>
    </table>

    <table align="center">
        <h4>Daftar Harga Buah per KG</h4>
        <tr>
            <td>Mangga</td>
            <td>:</td>
            <td>Rp. 15.000</td>
        </tr>
        <tr>
            <td>Pisang</td>
            <td>:</td>
            <td>Rp. 12.000</td>
        </tr>
        <tr>
            <td>Semangka</td>
            <td>:</td>
            <td>Rp. 10.000</td>
        </tr>
        <tr>
            <td>Jeruk</td>
            <td>:</td>
            <td>Rp. 16.000</td>
        </tr>
        <tr>
            <td>Apel</td>
            <td>:</td>
            <td>Rp. 20.000</td>
        </tr>
    </table>

    <table align="center">
        <h4>Ongkos Kirim</h4>
        <tr>
            <td>Jakarta</td>
            <td>:</td>
            <td>Rp. 25.000</td>
        </tr>
        <tr>
            <td>bandung</td>
            <td>:</td>
            <td>Rp. 35.000</td>
        </tr>
        <tr>
            <td>Lain Kota</td>
            <td>:</td>
            <td>Rp. 50.000</td>
        </tr>
    </table>
    </div>

</body>
</html>
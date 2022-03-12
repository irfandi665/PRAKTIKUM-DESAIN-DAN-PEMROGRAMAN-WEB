<?php
    $barang = $_POST['barang'];
    $status = $_POST['status'];
    $kota = $_POST['kota'];
    $qty = $_POST['qty'];

    if ($barang = "Mangga") {
        $kode = "IS001";
    }
    elseif ($barang = "Pisang") {
        $kode = "IS002";
    }
    elseif ($barang = "Semangka") {
        $kode = "IS003";
    }
    elseif ($barang = "Jeruk") {
        $kode = "IS004";
    }
    elseif ($barang = "Apel") {
        $kode = "IS005";
    }
?>
<?php 
    if ($barang = "Mangga") {
        $harga = '15000';
    }
    elseif ($barang = "Pisang") {
        $harga = '12000';
    }
    elseif ($barang = "Semangka") {
        $harga = '10000';
    }
    elseif ($barang = "Jeruk") {
        $harga = '16000';
    }
    elseif ($barang = "Apel") {
        $harga = '20000';
    }
    
    $subtotal = $qty*$harga
?>

<?php 
    if ($status = "Pelanggan") {
        $diskon=$subtotal*'0.10';
    }else {
        $diskon=$subtotal*'0.05';
    }
?>
<?php 
    if ($kota="Jakarta") {
        $ongkir='25000';
    }elseif ($kota="Bandung") {
        $ongkir='35000';
    }else {
        $ongkir='50000';
    }
    $totalbayar= $subtotal + $ongkir - $diskon;
?>


<html>
<head>
    <title>Menghitung Total Bayar </title>
    <link rel="stylesheet" href="css/penjualan.css">
</head>
<body>
    <div class="penjualan">
    <h1 align="center">Form Hitung Total Bayar</h1>
    <form action="input_penjualan.php" method="post">
        <table align="center">
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><?php echo $kode ?></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><?php echo $barang ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><?php echo $status ?></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td>
                    <?php echo $kota ?>
                </td>
            </tr>
            
            <tr>
                <td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <?php echo $qty; echo" kg" ?>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?php echo"Rp. ";echo $harga ?></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>:</td>
                <td><?php echo"Rp. ";echo $subtotal ?></td>
            </tr>
            <tr>
                <td>Ongkos Kirim</td>
                <td>:</td>
                <td><?php echo"Rp. ";echo $ongkir ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td class="total">Total Bayar</td>
                <td class="total">:</td>
                <td class="total"><b><?php echo"Rp. ";echo $totalbayar ?></b></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="kembali" value="Kembali" class="tombol">
                </td>
            </tr>
        </table>
    </form>
    </div>
    <hr />
    <br><br><br>
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
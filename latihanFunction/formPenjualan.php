<?php
    require_once "functionPenjualan.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<!-- Jumbotron + Form login -->
<div class="kontenLogin" align="center">
    <div class="jumbotron w-25">
    <h2 class="display-5" align="center">Pembelian</h2>
    <br>
    <br>
        <form name="formPenjualan" action="" method="post">
        <div class="form-group" align="left">
            <label>Jumlah Pembelian</label>
            <input type="number" min="0" class="form-control" name="jumlahBeli1" required>
        </div>
        <div align="left">
        <button type="submit" class="btn btn-primary" name="pembelian">Hitung</button>
        </div>
        </form>
    </div>
</div>
<!-- Proses -->
<?php
    if (isset($_POST['pembelian'])) {
        $jumlahBeli = $_POST['jumlahBeli1'];

        $totalHarga = totalHarga($jumlahBeli);
        $totalDiskon = totalDiskon($totalHarga, $jumlahBeli);
        $totalBayar = totalBayar($totalHarga, $totalDiskon);
    }
?>
<!-- Hasil -->
<div class="kontenLogin1" align="center">
    <div class="jumbotron w-25">
    <h3 class="display-5" align="center">Total Pembayaran</h3>
    <br>
    <br>
        <p align="left">Total Harga
            <?php
                if (isset($totalHarga)) {
                    echo " = Rp. ". number_format($totalHarga);
                }
            ?>
        </p>
        <p align="left">Total Diskon
            <?php
                if (isset($totalDiskon)) {
                    echo "= Rp. ". number_format($totalDiskon);
                }
            ?>
        </p>
        <p align="left">Total Bayar
            <?php
                if (isset($totalBayar)) {
                    echo " = Rp. ". number_format($totalBayar);
                }
            ?>
        </p>
    </div>
</div>
</body>
</html>
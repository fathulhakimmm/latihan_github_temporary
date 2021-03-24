<?php
include 'classLingkaran.php';
if (isset($_POST['hitung'])) {
    $myLingkaran = new Lingkaran($_POST['r']);
}
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

<!-- Jumbotron + Form Lingkaran -->
<div class="konten1" align="center">
    <div class="jumbotron bg-dark text-warning" style="max-width: 30rem;">
    <h2 class="display-5" align="center">Keliling dan Luas Lingkaran</h2>
    <br>
    <br>
        <form name="formLingkaran" action="" method="post">
        <div class="form-group" align="left">
            <label>Masukkan angka r</label>
            <input type="number" min="0" class="form-control" name="r" required placeholder="Masukkan Nilai r (Jari-jari)">
        </div>
        <div align="left">
            <input type="submit" class="btn btn-warning btn-block" name="hitung" value="Hitung">
        </div>
        </form>
    </div>
</div>
<!-- Hasil Keliling -->
<div class="konten2" align="center">
    <div class="card border-warning mb-3 bg-dark" align="center" style="max-width: 30rem;">
        <div class="card-header text-warning" align="center">
        <h4>Hasil Perhitungan</h4></div>
        <div class="card-body text-warning" align="left">
            <?php
                if (isset($_POST['hitung'])) {
                    echo "Nilai r (Jari-jari) Lingkaran adalah = ". $_POST['r'];
                    echo "<br/>";
                    echo "Keliling Lingkaran adalah = ". $myLingkaran->getKeliling();
                    echo "<br/>";
                    echo "Luas Lingkaran adalah = ". $myLingkaran->getLuas();
                }
            ?>
        </div>
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>
</html>
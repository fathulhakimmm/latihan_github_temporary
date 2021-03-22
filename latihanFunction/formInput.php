<?php
require_once "latihanFunction.php";
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
    <div class="jumbotron">
    <h2 class="display-5" align="center">Perhitungan Luas dan Keliling Lingkaran</h2>
    <br>
    <br>
        <form name="formlingkaran" action="" method="post">
                <div>
                    <input type="number" required min="0" name="r" class="form-control" placeholder="Masukkan Angka r"><br/>
                    <input type="submit" name="hitungLuasLingkaranBtn" value="Hitung Luas" class="btn btn-dark btn-outline-warning">
                    <input type="submit" name="hitungKelilingLingkaranBtn" value="Hitung Keliling" class="btn btn-dark btn-outline-warning">
                    <button type="reset" onclick="resetNilai()" class="btn btn-dark btn-outline-warning">Reset</button>
                </div>
                <?php
                    if (isset($_POST['hitungLuasLingkaranBtn'])){
                        echo "<div id='pesan'>Luas Lingkaran dengan jari-jari ".$_POST['r']." adalah : ". hitungLuasLingkaran($_POST['r']);
                    }
                    if (isset($_POST['hitungKelilingLingkaranBtn'])){
                        echo "<div id='pesan'>Keliling Lingkaran dengan jari-jari ".$_POST['r']." adalah : ". hitungKelilingLingkaran($_POST['r']);
                    } 
                ?>
            </div>
        </form>
    </div>
<!-- Jumbotron + Form Segitiga -->
<div class="jumbotron">
    <h2 class="display-5" align="center">Perhitungan Luas dan Keliling Segitiga</h2>
    <br>
    <br>
        <form name="formsegitiga" action="" method="post">
                <div>
                    <input type="number" required min="0" name="alas" placeholder="Masukkan Angka Alas">
                    <input type="number" required min="0" name="tinggi" placeholder="Masukkan Angka Tinggi">
                    <input type="number" required min="0" name="sisiA" placeholder="Masukkan Angka Sisi A">
                    <input type="number" required min="0" name="sisiB" placeholder="Masukkan Angka Sisi B">
                    <input type="number" required min="0" name="sisiC" placeholder="Masukkan Angka Sisi C"><br/><br/>
                    <input type="submit" name="hitungLuasSegitigaBtn" value="Hitung Luas" class="btn btn-dark btn-outline-warning">
                    <input type="submit" name="hitungKelilingSegitigaBtn" value="Hitung Keliling" class="btn btn-dark btn-outline-warning">
                    <button type="reset" onclick="resetNilai()" class="btn btn-dark btn-outline-warning">Reset</button>
                </div>
                <?php
                    if (isset($_POST['hitungLuasSegitigaBtn'])){
                        echo "<div id='pesan'>Luas Segitiga dengan Alas ".$_POST['alas']." dan Tinggi ".$_POST['tinggi']." adalah : " . hitungLuasSegitiga($_POST['alas'],$_POST['tinggi']);
                    }
                    if (isset($_POST['hitungKelilingSegitigaBtn'])){
                        echo "<div id='pesan'>Keliling Segitiga dengan A ".$_POST['sisiA']. ", B ".$_POST['sisiB']. ", dan C ".$_POST['sisiC']. " adalah : " . hitungKelilingSegitiga($_POST['sisiA'],$_POST['sisiB'],$_POST['sisiC']);
                    } 
                ?>
            </div>
        </form>
    </div>
<!-- Jumbotron + Form Jajar Genjang-->
<div class="jumbotron">
    <h2 class="display-5" align="center">Perhitungan Luas dan Keliling Jajar Genjang</h2>
    <br>
    <br>
        <form name="formjajargenjang" action="" method="post">
                <div>
                    <input type="number" required min="0" name="alas" placeholder="Masukkan Angka Alas">
                    <input type="number" required min="0" name="tinggi" placeholder="Masukkan Angka Tinggi">
                    <input type="number" required min="0" name="sisiA" placeholder="Masukkan Angka Sisi A">
                    <input type="number" required min="0" name="sisiB" placeholder="Masukkan Angka Sisi B"><br/><br/>
                    <input type="submit" name="hitungLuasJajargenjangBtn" value="Hitung Luas" class="btn btn-dark btn-outline-warning">
                    <input type="submit" name="hitungKelilingJajargenjangBtn" value="Hitung Keliling" class="btn btn-dark btn-outline-warning">
                    <button type="reset" onclick="resetNilai()" class="btn btn-dark btn-outline-warning">Reset</button>
                </div>
                <?php
                    if (isset($_POST['hitungLuasJajargenjangBtn'])){
                        echo "<div id='pesan'>Luas Jajar Genjang dengan Alas ".$_POST['alas']." dan Tinggi ".$_POST['tinggi']." adalah : " . hitungLuasJajargenjang($_POST['alas'],$_POST['tinggi']);
                    }
                    if (isset($_POST['hitungKelilingJajargenjangBtn'])){
                        echo "<div id='pesan'>Keliling Jajar Genjang dengan A ".$_POST['sisiA']. ", dan B ".$_POST['sisiB']. " adalah : " . hitungKelilingJajargenjang($_POST['sisiA'],$_POST['sisiB']);
                    } 
                ?>
            </div>
        </form>
    </div>
    <script>
        function resetNilai(){
            document.getElementById('pesan').innerHTML = ''
        }
    
    </script>
</body>
</html>
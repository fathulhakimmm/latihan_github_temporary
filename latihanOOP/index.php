<?php
require_once 'myClass.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // pembuatan objek
        $pesawatA = new PesawatTerbang('abu-abu');
        echo "Warna pesawat A diawal adalah : ". $pesawatA->getWarna();
        echo "</br>";
        // memberikan nilai
        $pesawatA->gantiWarna('merah');
        // mendapatkan nilai
        echo "Warna pesawat A adalah : ". $pesawatA->getWarna();
        echo "</br>";
        // memberikan nilai2
        $pesawatA->gantiWarna('biru');
        // mendapatkan nilai2
        echo "Warna pesawat A adalah : ". $pesawatA->getWarna();
        echo "<hr/>";

        //objek mobil
        $mobilA = new Mobil('merah');
        echo "Warna mobil A diawal adalah : ". $mobilA->getWarna();
        echo "</br>";
        echo "Kecepatan mobil A adalah : ". $mobilA->getKecepatan();
        $mobilA->tambahKecepatan(20);
        echo "</br>";
        echo "Kecepatan mobil A adalah : ". $mobilA->getKecepatan();
        $mobilA->tambahKecepatan(40);
        echo "</br>";
        echo "Kecepatan mobil A adalah : ". $mobilA->getKecepatan();
        echo "<hr/>";

        //pemanggilan class child
        $mobilB = new MobilBalap('biru');
        echo "Warna mobil balap B adalah : ". $mobilB->getWarna();
        echo "</br>";
        echo "Kecepatan mobil balap B adalah : ". $mobilB->getKecepatan();
        $mobilB->tambahKecepatan(10);
        echo "</br>";
        echo "Kecepatan mobil balap B adalah : ". $mobilB->getKecepatan();
        $mobilB->tambahKecepatan(20);
        echo "</br>";
        echo "Kecepatan mobil balap B adalah : ". $mobilB->getKecepatan(); 
    ?>
</body>
</html>
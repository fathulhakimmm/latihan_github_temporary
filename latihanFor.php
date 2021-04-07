<?php
    $angka = 5;
    for($a=1;$a<=$angka;$a++){
        for($b=1;$b<=$a;$b++){

        if($b==5){
            echo $a.'*';
        }else {
            echo $a;
        }
        }
        echo "<br>";
    }

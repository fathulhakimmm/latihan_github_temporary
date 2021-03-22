<?php
    function hitungLuasSegitiga($alas, $tinggi){
        $luas = $alas*$tinggi/2;
        return $luas;
    }
    
    function hitungKelilingSegitiga($sisiA, $sisiB, $sisiC){
        $keliling = $sisiA+$sisiB+$sisiC;
        return $keliling;
    }

    function hitungLuasLingkaran($r){
        $luas = 3.14*$r*$r;
        return $luas;
    }
    
    function hitungKelilingLingkaran($d){
        $keliling = 3.14*$d;
        return $keliling;
    }

    function hitungLuasJajargenjang($alas, $tinggi){
        $luas = $alas*$tinggi;
        return $luas;
    }

    function hitungKelilingJajargenjang($sisiA, $sisiB){
        $keliling = 2*($sisiA+$sisiB);
        return $keliling;
    }
    
?>
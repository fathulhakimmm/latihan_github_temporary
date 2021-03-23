<?php
    //proses penjualan
    $harga = 9000;
    $diskon = 0.05;

    function totalHarga($jumlahBeli){
        global $harga;
        $jmlTotalHarga = $harga*$jumlahBeli;
        return $jmlTotalHarga;
    }

    function totalDiskon($totalHarga, $jumlahBeli){
        global $diskon;
        if ($jumlahBeli > 36) {
            $jumlahTotalDiskon = $totalHarga*$diskon;
        }else{
            $jumlahTotalDiskon = $totalHarga*0;
        }
        return $jumlahTotalDiskon;
    }

    function totalBayar($totalHarga, $totalDiskon){
        $totalBayar = $totalHarga-$totalDiskon;
        return $totalBayar;
    }
?>
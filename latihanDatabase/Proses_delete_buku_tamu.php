<?php
    require_once "MySQL_connection.php";

$id = $_GET['idTamu'];

    //Perintah SQL
    $sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

    //Eksekusi Perintah
    if($conn->query($sql) === true){
        // header("location:Halaman_buku_tamu.php");
        echo "<script>
        alert('Berhasil Terhapus');
        location.assign('Halaman_buku_tamu.php');

        </script>";
    }else {
        echo "<script>
        alert(' Gagal Terhapus');
        location.assign('Halaman_buku_tamu.php');

        </script>";
    }

?>
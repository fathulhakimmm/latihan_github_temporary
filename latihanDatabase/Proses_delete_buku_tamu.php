<?php
    require_once "MySQL_connection.php";
    session_start();

$id = $_GET['idTamu'];

    //Perintah SQL
    $sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

    //Eksekusi Perintah
    if($conn->query($sql) === true){
        $_SESSION['delete_status'] = 1;
        $_SESSION['alert_status'] = 'alert alert-warning alert-dismissible fade show';
        $_SESSION['alert_message'] = '<strong>Berhasil!!</strong> Data berhasil dihapus';
        header("location:Halaman_buku_tamu.php");
        // echo "<script>
        // alert('Berhasil Terhapus');
        // location.assign('Halaman_buku_tamu.php');

        // </script>";
    }else {
        $_SESSION['delete_status'] = 1;
        $_SESSION['alert_status'] = 'alert alert-danger alert-dismissible fade show';
        $_SESSION['alert_message'] = '<strong>Gagal!!</strong> Data gagal dihapus';
        header("location:Halaman_buku_tamu.php");
        // echo "<script>
        // alert(' Gagal Terhapus');
        // location.assign('Halaman_buku_tamu.php');

        // </script>";
    }

?>
<?php
require_once "MySQL_connection.php";
// Start Session
session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

//Perintah SQL
$sql = "UPDATE tb_tamu SET nama_tamu='$nama', email_tamu='$email', pesan_tamu='$pesan' WHERE id_tamu='$id'";

//Eksekusi Perintah
if ($conn->query($sql) === true) {
    $_SESSION['update_status'] = 1;
    $_SESSION['alert_status'] = 'alert alert-warning alert-dismissible fade show';
    $_SESSION['alert_message'] = '<strong>Berhasil!!</strong> Data berhasil diupdate';
    header("location:Halaman_buku_tamu.php");
    // echo "<script>
    // alert('Berhasil Terupdate');
    // location.assign('Halaman_buku_tamu.php');

    // </script>";
} else {
    $_SESSION['update_status'] = 1;
    $_SESSION['alert_status'] = 'alert alert-danger alert-dismissible fade show';
    $_SESSION['alert_message'] = '<strong>Gagal!!</strong> Data gagal diupdate';
    header("location:Halaman_buku_tamu.php");
    // echo "<script>
    // alert(' Gagal Terupdate');
    // location.assign('Halaman_buku_tamu.php');

    // </script>";
}
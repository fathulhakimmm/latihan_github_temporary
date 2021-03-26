<?php
    require_once "MySQL_connection.php";
    // start session
    session_start();

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    //Perintah SQL
    $sql = "INSERT INTO tb_tamu VALUES('','$nama', '$email', '$pesan')";

    //Eksekusi Perintah
    if($conn->query($sql) === true){
        $_SESSION['insert_status'] = 1;
        $_SESSION['alert_status'] = 'alert alert-warning alert-dismissible fade show';
        $_SESSION['insert_message'] = '<strong>Berhasil!!</strong> Data berhasil disimpan';
        header("location:Halaman_buku_tamu.php");
        // echo "<script>
        // alert('Berhasil Tersimpan');
        // location.assign('Halaman_buku_tamu.php');

        // </script>";
    }else {
        $_SESSION['insert_status'] = 1;
        $_SESSION['alert_status'] = 'alert alert-danger alert-dismissible fade show';
        $_SESSION['insert_message'] = '<strong>Gagal!!</strong> Data Gagal disimpan.';
        header("location:Halaman_buku_tamu.php");
        // echo "<script>
        // alert(' Gagal Berhasil Tersimpan');
        // location.assign('Halaman_buku_tamu.php');

        // </script>";
    }
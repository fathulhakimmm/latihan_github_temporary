<?php
    include "MySQL_connection.php";
    session_start();

    $usern = $_POST['user'];
    $passw = $_POST['pass'];
        
    
    $sqlData = "SELECT * FROM tb_login WHERE (username = '$usern' OR email = '$usern') AND password = '$passw'";
    $cek = $conn->query($sqlData);
        

    if ($cek->num_rows > 0) {
        $_SESSION['login'] = 1;
        $_SESSION['alert_login'] = 'Anda berhasil Login!!';
        header("location: Halaman_buku_tamu.php");
    }else{
        $_SESSION['login'] = 0;
        $_SESSION['alert_status'] = 'alert alert-danger alert-dismissible fade show';
        $_SESSION['alert_login'] = 'Anda gagal Login!! Periksa kembali username/password Anda';
        header("location: Halaman_login.php");  
    
    }
    ?>
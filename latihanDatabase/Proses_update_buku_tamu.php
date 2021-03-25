<?php
    require_once "MySQL_connection.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    //Perintah SQL
    $sql = "UPDATE tb_tamu SET nama_tamu='$nama', email_tamu='$email', pesan_tamu='$pesan' WHERE id_tamu='$id'";

    //Eksekusi Perintah
    if($conn->query($sql) === true){
        // header("location:Halaman_buku_tamu.php");
        echo "<script>
        alert('Berhasil Terupdate');
        location.assign('Halaman_buku_tamu.php');

        </script>";
    }else {
        echo "<script>
        alert(' Gagal Terupdate');
        location.assign('Halaman_buku_tamu.php');

        </script>";
    }

?>
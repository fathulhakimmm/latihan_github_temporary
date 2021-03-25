<?php
    require_once "MySQL_connection.php";

    $id = $_GET['idTamu'];
    $sql = "SELECT * FROM tb_tamu WHERE id_tamu='$id'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $nama = $row['nama_tamu'];
        $email = $row['email_tamu'];
        $pesan = $row['pesan_tamu'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Jumbotron + Form inpu Buku Tamu -->
<div class="konten1" align="center">
    <div class="jumbotron" style="max-width: 47rem;">
    <h2 class="display-5 bg-warning" align="center">Form Edit Buku Tamu</h2>
    <br>
    <br>
        <form action="Proses_update_buku_tamu.php" method="post">
        <div class="form-group" align="left">
                <label>ID</label>
                <input type="text" class="form-control" name="id" value="<?=$_GET['idTamu'];?>" readonly required>
            </div>
            <div class="form-group" align="left">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?=$nama;?>">
            </div>
            <div class="form-group" align="left">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?=$email;?>">
            </div>
            <div class="form-group" align="left">
                <label>Pesan</label>
                <textarea class="form-control" name="pesan"><?=$pesan;?></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning btn-block" value="Update">
            </div>
            <div class="form-group">
                <a href="Halaman_buku_tamu.php">
                    <i class="fa fa-arrow-left"></i>
                    Back
                </a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
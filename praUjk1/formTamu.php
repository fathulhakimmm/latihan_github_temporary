<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form Tamu</title>
    <style>
        .header {
            height: 150px;
            margin: auto;
            padding: 60px;
        }

        .navbar {
            height: auto;
            border: 1px solid;
            border-color: lightslategrey;
        }

        #tp {
            border: 1px solid;
            border-color: lightslategrey;
        }

        #pp {
            background-color: #f2f2f2;
            text-align: center;
        }

        .card-footer {
            background-color: #f2f2f2;
            border: 1px solid;
            border-color: lightslategrey;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h3 align="center">PT. SEMEN BATURAJA (PERSERO) Tbk</h3>
        </div>
        <!-- Batas Header -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light text-dark">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">SEMEN BATURAJA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="index.php">Beranda<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="formTamu.php" target="_blank">Buku Tamu</a>
                    <a class="nav-link" href="gallery.php" target="_blank">Gallery</a>
                </div>
            </div>
        </nav>
        <!-- Batas Navbar -->

        <!-- Alert -->
        <?php
        if (isset($_POST['submit'])) {
            $_SESSION['login'] = 0;
            $_SESSION['alert_status'] = 'alert alert-primary alert-dismissible fade show';
            $_SESSION['alert_login'] = 'Anda Berhasil!';
        }
        ?>
        <?php
        if (isset($_SESSION["login"])) {
            if ($_SESSION["login"] == 0) {
        ?>
                <div class="<?= $_SESSION['alert_status']; ?>" role="alert">
                    <?= $_SESSION['alert_login']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php }
        }
        unset($_SESSION['login']) ?>
        <!-- Batas Alert -->

        <!-- Content Form -->
        <div class="row">
            <div class="col-12 col-sm-9">
                <!-- Card Form -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Tamu</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama1" placeholder="Masukkan Nama Anda" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="email1" placeholder="Masukkan Email Anda" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Pesan/Pertanyaan</label>
                                <textarea class="form-control" name="pesan" id="pesan1" rows="3" placeholder="Masukkan Pesan/Pertanyaan Anda" required></textarea>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="Kirim">
                        </form>
                    </div>
                </div>
                <!-- Batas Form -->
            </div>
            <!-- Card Profil Perusahaan -->
            <div class="col-12 col-sm-3">
                <!-- Card PP 1 -->
                <div class="card" id="pp">
                    <div class="card-body">
                        <h5 class="card-title">Grafik Saham</h5>
                        <a href="https://finance.yahoo.com/quote/SMBR.JK/chart?p=SMBR.JK#eyJpbnRlcnZhbCI6ImRheSIsInBlcmlvZGljaXR5IjoxLCJ0aW1lVW5pdCI6bnVsbCwiY2FuZGxlV2lkdGgiOjI2LjE2NjY2NjY2NjY2NjY2OCwiZmxpcHBlZCI6ZmFsc2UsInZvbHVtZVVuZGVybGF5Ijp0cnVlLCJhZGoiOnRydWUsImNyb3NzaGFpciI6dHJ1ZSwiY2hhcnRUeXBlIjoibGluZSIsImV4dGVuZGVkIjpmYWxzZSwibWFya2V0U2Vzc2lvbnMiOnt9LCJhZ2dyZWdhdGlvblR5cGUiOiJvaGxjIiwiY2hhcnRTY2FsZSI6ImxpbmVhciIsInBhbmVscyI6eyJjaGFydCI6eyJwZXJjZW50IjoxLCJkaXNwbGF5IjoiU01CUi5KSyIsImNoYXJ0TmFtZSI6ImNoYXJ0IiwiaW5kZXgiOjAsInlBeGlzIjp7Im5hbWUiOiJjaGFydCIsInBvc2l0aW9uIjpudWxsfSwieWF4aXNMSFMiOltdLCJ5YXhpc1JIUyI6WyJjaGFydCIsIuKAjHZvbCB1bmRy4oCMIl19fSwic2V0U3BhbiI6bnVsbCwibGluZVdpZHRoIjoyLCJzdHJpcGVkQmFja2dyb3VuZCI6dHJ1ZSwiZXZlbnRzIjp0cnVlLCJjb2xvciI6IiMwMDgxZjIiLCJzdHJpcGVkQmFja2dyb3VkIjp0cnVlLCJyYW5nZSI6bnVsbCwiZXZlbnRNYXAiOnsiY29ycG9yYXRlIjp7ImRpdnMiOnRydWUsInNwbGl0cyI6dHJ1ZX0sInNpZ0RldiI6e319LCJzeW1ib2xzIjpbeyJzeW1ib2wiOiJTTUJSLkpLIiwic3ltYm9sT2JqZWN0Ijp7InN5bWJvbCI6IlNNQlIuSksiLCJxdW90ZVR5cGUiOiJFUVVJVFkiLCJleGNoYW5nZVRpbWVab25lIjoiQXNpYS9KYWthcnRhIn0sInBlcmlvZGljaXR5IjoxLCJpbnRlcnZhbCI6ImRheSIsInRpbWVVbml0IjpudWxsLCJzZXRTcGFuIjpudWxsfV0sInN0dWRpZXMiOnsi4oCMdm9sIHVuZHLigIwiOnsidHlwZSI6InZvbCB1bmRyIiwiaW5wdXRzIjp7ImlkIjoi4oCMdm9sIHVuZHLigIwiLCJkaXNwbGF5Ijoi4oCMdm9sIHVuZHLigIwifSwib3V0cHV0cyI6eyJVcCBWb2x1bWUiOiIjMDBiMDYxIiwiRG93biBWb2x1bWUiOiIjZmYzMzNhIn0sInBhbmVsIjoiY2hhcnQiLCJwYXJhbWV0ZXJzIjp7IndpZHRoRmFjdG9yIjowLjQ1LCJjaGFydE5hbWUiOiJjaGFydCIsInBhbmVsTmFtZSI6ImNoYXJ0In19fX0-" target="_blank"><img src="9.png" class="card-img-top" alt="..."></a>
                    </div>
                </div>
                <!-- Batas Card PP 1 -->

                <!-- Card PP 2 -->
                <div class="card" id="pp">
                    <div class="card-body">
                        <h5 class="card-title">Laporan Keuangan</h5>
                        <a href="https://semenbaturaja.co.id/laporan-tahunan-keuangan/" target="_blank"><img src="7.png" class="card-img-top" alt="..."></a>
                    </div>
                </div>
                <!-- Batas Card PP 2 -->

                <!-- Card PP 3 -->
                <div class="card" id="pp">
                    <div class="card-body">
                        <h5 class="card-title">Laporan Tanggung Jawab Sosial</h5>
                        <a href="https://semenbaturaja.co.id/program-kemitraan-dan-bina-lingkungan-pkbl/" target="_blank"><img src="8.png" class="card-img-top" alt="..."></a>
                    </div>
                </div>
                <!-- Batas Card PP 3 -->
            </div>
            <!-- Batas Card PP -->
        </div>
        <!-- Batas Content -->

        <!-- Footer -->
        <div class="card-footer" align="center"><b>&#169;</b>2021 PT. SEMEN BATURAJA (PERSERO) Tbk</div>
        <!-- Batas Footer -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <script>
        // Script Alert
        $('.alert').delay(500).fadeOut(500);
    </script>
</body>

</html>
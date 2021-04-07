<?php
if (isset($_GET['page'])) {
    $halaman = $_GET['page'];
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Gallery</title>
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

        #c1 {
            padding: 20px;
        }

        #c2 {
            padding: 20px;
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
            <h3 align="center"> GALLERY PT. SEMEN BATURAJA (PERSERO) Tbk</h3>
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

        <!-- Content 1 -->
        <div class="row" id="c1">
            <div class="col-12 col-sm-4">
                <div class="card">
                    <img src="10.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Semen Baturaja Kerjasama pemanfaatan Limestone, Fly Ash dan Botton Ash dengan Huadian Bukit Asam Power.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card">
                    <img src="11.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Siap Kembangkan Industri Semen, Semen Baturaja dan Unila Lakukan Penandatanganan Kerjasama Penelitian.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card">
                    <img src="14.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">PT Semen Baturaja (Persero) Tbk telah melakukan penandatanganan perjanjian kredit bersama Bank Sumsel Babel.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Batas Content 2 -->

        <!-- Content 2 -->
        <div class="row" id="c2">
            <div class="col-12 col-sm-4">
                <div class="card">
                    <img src="15.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Semen Baturaja menggelar Acara Town Hall Meeting Tahun 2021 secara internal di Aula Wisma Ganesha Pabrik Baturaja.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card">
                    <img src="16.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Rapat Kerja V & Pelantikan Pengurus Pusat Serikat Karyawan Semen Baturaja Periode 2020-2023 (28/01).</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card">
                    <img src="17.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Semen Baturaja menggelar Lomba Desain Masker yang diikuti oleh Karyawan/ti Semen Baturaja.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Batas Content 2 -->

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
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title')</title>
    <style>
        .header {
            width: 98.4%;
            height: 350px;
            margin: auto;
            padding: 60px;
            background-image:url('{{ asset('img/tes5.jpg') }}');
            font-family: Verdana;
        }
        .navbar {
            height: auto;
            background-color: rgb(198, 156, 178);
            font-family: Verdana;
        }
        /* .navbar-nav{
            background-color: whitesmoke;
        } */
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header bg-primary">
        <h3 align="center">Latihan CMS Sederhana</h3>
    </div>
    <!-- Navbar -->
    <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="nav-link disabled text-dark" href="#" tabindex="-1" aria-disabled="true">CMS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="/user">Beranda<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="/">Form Artikel</a>
                </div>
            </div>
        </nav>
    </div>
    @yield('container')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
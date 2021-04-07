<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
</head>
<style>
    .container{
        font-family: Verdana;
    }
    .col-9{
        padding: 10px;
        background-color: #ffccff;
        margin-top: 10px;
        border-right: 1px solid;
        border-color: #a6a6a6;
    }
    .list-group{
        margin-top: 30px;
        padding: 30px;
    }
    .col-3{
        padding: 10px;
        background-color: #ffccff;
        margin-top: 10px;
    }
    .list-group1{
        margin-top: 30px;
        padding: 30px;
        background-color: #ffccff;
    }
    .mb-1{
        font-size: 21px;
    }
    small{
        font-size: 16px;
    }
    p{
        font-size: 15px;
    }

</style>
<body>
    @extends('layouts.master2')
    @section('title','Artikel')
    @section('container')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="list-group">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $articles->title }}</h5>
                        <small>{{ $articles->created_at }}</small>
                    </div>
                    <br>
                    <p class="text-justify">{{ $articles->article }}</p>
                    <a href="/user">Kembali</a>
                </div>
            </div>

            <div class="col-3" style="margin-top: 10px;">
                <h4 align="center">Kategori</h4>
                <hr/>
                <ul class="list-group1">
                    <li class="list-group-item" style="background-color: #ffccff;"><a href="http://localhost:8000/search?search=1">Kesehatan</a></li>
                    <li class="list-group-item" style="background-color: #ffccff;"><a href="http://localhost:8000/search?search=2">Teknologi</a></li>
                </ul>
            </div>  
        </div>
    </div>
    @endsection()
</body>
</html>
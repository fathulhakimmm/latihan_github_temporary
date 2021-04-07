<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('layouts.master2')
    @section('title','Tes')
    @section('container')

	<form action="/search" method="GET">
		<input type="text" name="search" placeholder="search article .." value="{{ old('search') }}">
		<input type="submit" value="">
	</form>
    
    <div class="container">
        <div class="row">
            <div class="col-9" style="margin-top:10px;">
                <div class="list-group">
                    @foreach($articles as $article)
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $article->title }}</h5>
                        <small>{{ $article->created_at }}</small>
                    </div>
                    <p class="text-justify">{{ $article->article }}</p>
                    <a href="">Baca selanjutnya...</a>
                    @endforeach
                </div>
            </div>

            <div class="col-3" style="margin-top:10px;">
                <h4>Category</h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="">Kesehatan></li>
                    <li class="list-group-item"><a href="">Teknologi</a></li>
                </ul>
            </div>  
        </div>
    </div>
    @endsection()
</body>

</html>
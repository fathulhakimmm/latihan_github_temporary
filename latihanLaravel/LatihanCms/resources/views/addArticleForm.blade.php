<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
@extends('layouts.master')
@section('title', 'Form')
@section('container')
<h3 class="text-center mt-3">Form Artikel</h3>
<hr />
<form method="POST" action="/store">
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <div class="form-group row">
        <input type="hidden" name="action">
        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputTitle" placeholder="Judul" name="title" required />
        </div>
    </div>
    <div class="form-group row">
        <label for="inputArticle" class="col-sm-2 col-form-label">Article</label>
        <div class="col-sm-10">
            <textarea name="article" class="form-control" id="inputArticle2" placeholder="Isi" required></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" name="category" >
                <option selected>Pilihan Kategori</option>
    @foreach($category as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
    @endforeach
            </select>
            </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Simpan">
        </div>
    </div>
</form>
<table class="table" id="myTable">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Title</th>
        <th>Article</th>
        <th>Category</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($articles as $key=>$article)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->article}}</td>
            <td>{{$article->category['title']}}</td>
            <td><a href="/delete/{{$article->id}}" class="btn btn-danger btn-sm" onclick="return confirm ('Anda akan menghapus record ini?')">
                    <i class="fa fa-trash"></i>
                </a>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="{{$article->id}}" data-title="{{$article->title}}" data-article="{{$article->article}}">
                    <i class="fa fa-edit"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Article</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/update" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="id" class="form-control edit-id" value="" readonly required >
                            </div>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control edit-title" value="" placeholder="Masukkan Title.." required >
                            </div>
                            <div class="form-group">
                                <textarea class="form-control edit-article" name="article" rows="15" value="" placeholder="Masukkan Article.." required ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Category</label>
                                    <select class="form-select" aria-label="Default select example2" name="category" >
                                        <option selected>Open this select menu</option>
                            @foreach($category2 as $category2)
                                <option value="{{ $category2->id }}">{{ $category2->title }}</option>
                            @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" onclick="return confirm ('Anda akan mengubah record ini?')" value="Update">
                            </div>
                        </form>       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection()   
</body>
</html>
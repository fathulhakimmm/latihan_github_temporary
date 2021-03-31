@extends('layouts.master')
@section('title', 'Halaman Beranda')
@section('content')
<h1>Ini adalah halaman Beranda</h1>
<h5>Nilai a adalah {{ $a }}</h5>
<h5>Nilai x adalah {{ $datas['x'] }}</h5>
<h5>Nilai y adalah {{ $datas['y'] }}</h5>
<h5>Nilai z adalah {{ $datas['z'] }}</h5>



@endsection()
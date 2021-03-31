@extends('layouts.master')
@section('title', 'Halaman Tambah Tamu')
@section('container')
<h3 class="text-center mt-3">Guest Form</h3>
<hr />
<form method="POST" action="/store">
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <div class="form-group row">
        <input type="hidden" name="action">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" required />
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required />
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <textarea name="address" class="form-control" id="inputAddress2" placeholder="Address" required></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="SAVE">
        </div>
    </div>
</form>
<table class="table" id="myTable">
    <thead class="thead-dark">
        <th>NO</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>ACTION</th>
    </thead>
    <tbody>
        @foreach($guests as $key=>$guest)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$guest->guestName}}</td>
            <td>{{$guest->guestEmail}}</td>
            <td>{{$guest->guestAddress}}</td>
            <td><a href="/delete/{{$guest->guestId}}" class="btn btn-danger btn-sm" onclick="return confirm ('Anda akan menghapus record ini?')" data-id="{{$guest->guestId}}">
                    <i class="fa fa-trash"></i>
                </a>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="{{$guest->guestId}}" data-name="{{$guest->guestName}}" data-email="{{$guest->guestEmail}}" data-address="{{$guest->guestAddress}}">
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
                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Tamu</h5>
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
                                <input type="text" name="name" class="form-control edit-name" value="" placeholder="Masukkan Nama Anda" required >
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control edit-email" value="" placeholder="Masukkan Email Anda" required >
                            </div>
                            <div class="form-group">
                                <textarea class="form-control edit-address" name="address" rows="15" value="" placeholder="Masukkan Alamat Anda" required ></textarea>
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
@endsection
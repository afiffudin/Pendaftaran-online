@extends('layouts.loglayout')
@section('title', 'LoginPage')

@section('content')

<div class="col-md-8">
<div class="card border-0 shadow rounded">
<div class="card-body">
<h4 class="font-weight-bold">register</h4>
<hr>
<form action="{{ route('register') }}" method="POST">
@csrf

<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="font-weight-bold text-uppercase">Nama Lengkap</label>
<input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama Lengkap">
@error('name')
<div class="alert alert-danger mt-2">
{{$message}}
</div>
@enderror
</div>
</div>
<div class="col-md-6">
    <div class="form-group">
                <label class="font-weight-bold text-uppercase">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                @error('tanggal_lahir')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
            </div>
            @enderror
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Dokter yang dituju</label>
                    <select class="form-control" id="nama_dokter-option" name="id_dokter">
            </select>
            </div>
            </div>  
            <div class="col-md-6">
            <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Poli yang dituju</label>
                    <select class="form-control" id="nama_poli-option" name="id_poli">
            </select>
            </div>
            </div>   
          </button>
        </div>
             </div>
@endsection

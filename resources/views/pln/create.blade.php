@extends('layouts.app')

@section('content')

<h2>Tambah Data Pelanggan</h2>

<form action="{{url('pln')}}" method="post">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="pln_nama" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Alamat</label>
        <textarea name="pln_alamat" class ="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class = "mb-3">
        <label for="">No.Hp</label>
        <input type="text" name="pln_nohp" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Simpan" class ="btn btn-primary">
    </div>

</form>

@endsection
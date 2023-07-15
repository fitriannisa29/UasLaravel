@extends('layouts.app')

@section('content')

<h2>Tambah Data Barang</h2>

<form action="{{url('barang')}}" method="post">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="barang_nama" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Jenis</label>
        <input type="text" name="barang_jenis" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Harga</label>
        <input type="text" name="barang_harga" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Simpan" class ="btn btn-primary">
    </div>

</form>

@endsection
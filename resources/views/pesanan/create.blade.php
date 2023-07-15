@extends('layouts.app')

@section('content')

<h2>Tambah Data Pesanan</h2>

<form action="{{url('pesanan')}}" method="post">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="pesanan_nama" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Jumlah</label>
        <input type="text" name="pesanan_jumlah" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Nama Barang</label>
        <input type="text" name="pesanan_nama_barang" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Simpan" class ="btn btn-primary">
    </div>

</form>

@endsection
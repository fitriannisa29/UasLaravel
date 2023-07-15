@extends('layouts.app')

@section('content')

<h2>Edit Data Pesanan</h2>

<form action="{{url('pesanan/'. $row->pesanan_id)}}" method="post">
<input type="hidden" name="_method" value= "PATCH">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="pesanan_nama" id="" class ="form-control" value="{{$row->pesanan_nama}}">
    </div>
    <div class = "mb-3">
        <label for="">Jumlah</label>
        <input type="text" name="pesanan_jumlah" id="" class ="form-control"  value="{{$row->pesanan_jumlah}}">
    </div>
    <div class = "mb-3">
        <label for="">Nama Barang</label>
        <input type="text" name="pesanan_nama_barang" id="" class ="form-control"  value="{{$row->pesanan_nama_barang}}">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Update" class ="btn btn-primary">
    </div>

</form>

@endsection
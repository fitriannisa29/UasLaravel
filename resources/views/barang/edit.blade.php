@extends('layouts.app')

@section('content')

<h2>Edit Data Barang</h2>

<form action="{{url('barang/'. $row->barang_id)}}" method="post">
<input type="hidden" name="_method" value= "PATCH">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="barang_nama" id="" class ="form-control" value="{{$row->barang_nama}}">
    </div>
    <div class = "mb-3">
        <label for="">Jenis</label>
        <input type="text" name="barang_jenis" id="" class ="form-control"  value="{{$row->barang_jenis}}">
    </div>
    <div class = "mb-3">
        <label for="">Harga</label>
        <input type="text" name="barang_harga" id="" class ="form-control"  value="{{$row->barang_harga}}">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Update" class ="btn btn-primary">
    </div>

</form>

@endsection
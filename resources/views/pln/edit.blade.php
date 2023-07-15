@extends('layouts.app')

@section('content')

<h2>Edit Data Pelanggan</h2>

<form action="{{url('pln/'. $row->pln_id)}}" method="post">
<input type="hidden" name="_method" value= "PATCH">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="pln_nama" id="" class ="form-control" value="{{$row->pln_nama}}">
    </div>
    <div class = "mb-3">
        <label for="">Alamat</label>
        <textarea name="pln_alamat" class ="form-control" id="" cols="30" rows="10">{{$row->pln_alamat}}</textarea>
    </div>
    <div class = "mb-3">
        <label for="">No.Hp</label>
        <input type="text" name="pln_nohp" id="" class ="form-control"  value="{{$row->pln_nohp}}">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Update" class ="btn btn-primary">
    </div>

</form>

@endsection
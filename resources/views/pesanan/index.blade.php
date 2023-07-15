@extends('layouts.app')

@section('content')

<h2>Data Pesanan</h2>

<a href = "{{url('pesanan/create')}}" class="btn btn-primary mb-3">Add New</a>

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>Nama Barang</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ( $rows as $row)
        <tr>
            <td>{{$row->pesanan_id}}</td>
            <td>{{$row->pesanan_nama}}</td>
            <td>{{$row->pesanan_jumlah}}</td>
            <td>{{$row->pesanan_nama_barang}}</td>
            <td><a href = "{{url('pesanan/edit/' . $row->pesanan_id) }}" class= "btn btn-warning">Edit</a></td>
            <td>
                <form action="{{url('pesanan/'. $row->pesanan_id)}}" method="post">
                    <input type="hidden" name="_method" value= "Delete">
                    @csrf
                    <input type="submit" value="Delete" class= "btn btn-danger">
                </form>
            </td>   
        </tr>
    @endforeach
</table>



@endsection
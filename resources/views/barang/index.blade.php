@extends('layouts.app')

@section('content')

<h2>Data Barang</h2>

<a href = "{{url('barang/create')}}" class="btn btn-primary mb-3">Add New</a>

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ( $rows as $row)
        <tr>
            <td>{{$row->barang_id}}</td>
            <td>{{$row->barang_nama}}</td>
            <td>{{$row->barang_jenis}}</td>
            <td>{{$row->barang_harga}}</td>
            <td><a href = "{{url('barang/edit/' . $row->barang_id) }}" class= "btn btn-warning">Edit</a></td>
            <td>
                <form action="{{url('barang/'. $row->barang_id)}}" method="post">
                    <input type="hidden" name="_method" value= "Delete">
                    @csrf
                    <input type="submit" value="Delete" class= "btn btn-danger">
                </form>
            </td>   
        </tr>
    @endforeach
</table>



@endsection
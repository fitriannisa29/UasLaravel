@extends('layouts.app')

@section('content')

<h2>Data Pelanggan</h2>

<a href = "{{url('pln/create')}}" class="btn btn-primary mb-3">Add New</a>

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No.Hp</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ( $rows as $row)
        <tr>
            <td>{{$row->pln_id}}</td>
            <td>{{$row->pln_nama}}</td>
            <td>{{$row->pln_alamat}}</td>
            <td>{{$row->pln_nohp}}</td>
            <td><a href = "{{url('pln/edit/' . $row->pln_id) }}" class= "btn btn-warning">Edit</a></td>
            <td>
                <form action="{{url('pln/'. $row->pln_id)}}" method="post">
                    <input type="hidden" name="_method" value= "Delete">
                    @csrf
                    <input type="submit" value="Delete" class= "btn btn-danger">
                </form>
            </td>   
        </tr>
    @endforeach
</table>



@endsection
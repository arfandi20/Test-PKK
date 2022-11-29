@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-10 mx-auto">
        
       
        <h1>Kategori</h1>

        <a href="{{ url ('kategori/create')}}" class="btn btn-primary btn-sm mb-3 mt-3">Tambah Data </a>

        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">ID</th>
                <th scope="col">Jenis Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->desc}}</td>
                        <td>
                        <a href="{{ url ('kategori/'.$item->id. '/edit')}}" class="btn btn-success btn-sm mb-3">
                            Edit
                        </a>
                        <a href="{{ url ('deletekategori/'.$item->id)}}" class="btn btn-danger btn-sm mb-3">
                            Hapus
                        </a>
                        </td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>
    
    
    </div>
</div>

@endsection
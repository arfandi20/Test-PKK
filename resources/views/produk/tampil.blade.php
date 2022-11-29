@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-10 mx-auto">
        
       
        <h1>Produk</h1>

        <a href="{{ url ('produk/create')}}" class="btn btn-primary btn-sm mb-3 mt-3">Tambah Data </a>

        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Foto Produk</th>
                <th scope="col">Harga Produk</th>
                <th scope="col">Deskripsi Produk</th>
                <th scope="col">Kategori Produk</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        {{-- <th scope="row">{{$loop->iteration}}</th> --}}
                        <td>{{$item->id}}</td>
                        <td>{{$item->namaProduk}}</td>
                        <td><img src="{{ asset('storage/'.$item->foto) }}" height="100px" alt=""></td>
                        <td>{{$item->harga}}</td>
                        <td>{{$item->descProduk}}</td>
                        <td>{{$item->kategori->nama}}</td>
                        <td>{{$item->status}}</td>
                        <td>
                        <a href="{{ url ('produk/'.$item->id. '/edit')}}" class="btn btn-success btn-sm mb-3">
                            Edit
                        </a>
                        <a href="{{ url ('deleteproduk/'.$item->id)}}" class="btn btn-danger btn-sm mb-3">
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
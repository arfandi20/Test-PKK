@extends('layouts.app')

@section('content')

<h1>Postingan</h1>

<a href="{{ url('post/create') }}" class="btn btn-primary">Tambah Data</a>

<div class="mt-4">
    <form>
    <table class="table text-center">
        <thead class="text-center">
            <tr>
                
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kategori</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($data as $item)
            <tr>
                {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                <td>{{ $item->id}}</td>
                <td>{{ $item->judul}}</td>
                <td>{{ $item->isi}}</td>
                <td>{{ $item->tanggal}}</td>
                <td>{{ $item->kategori->nama}}</td>
                <td>{{ $item->status}}</td>
                <td>
                    <a href="{{ url ('post/'. $item->id. '/edit') }}" class="btn btn-danger btn-sm mb-3">Edit</a>
                    <a href="{{ url ('deletepost/'.$item->id)}}" class="btn btn-danger btn-sm mb-3">
                            Hapus
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </form>
</div>
@endsection

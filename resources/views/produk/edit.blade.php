@extends('layouts.app')

@section('content')
<div class="container">
    <h1> Edit Data </h1>
    
    <form action="{{ url ('produk/'. $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Nama Produk </label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{$data->namaProduk}}">
        </div>
        <div class="form-group">
            <img src="{{ asset('storage/'.$data->foto) }}" height="100px" alt="">
            <label for="">Foto</label>
            <input type="file" class="form-control @error('judul') is-invalid @enderror" name="foto" value="{{$data->foto}}">
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{$data->harga}}">
        </div>
        <div class="form-group">
            <label for="">Deskripsi Produk</label>
            <textarea type="text" class="form-control @error('desc_produk') is-invalid @enderror" name="desc_produk" value="">{{$data->descProduk}}</textarea>
        </div>

        @if (Auth::user()->role == 'admin')
        <div class="form-group">
            <label for="">Status</label>
            <select class="form-select" aria-label="Default select example" name="status">
                <option selected>Open this select menu</option>
                <option value="aktif" @selected($data->status=='aktif')>aktif</option>
                <option value="tdk" @selected($data->status=='non')>non-aktif</option>
            </select>
        </div>
        @endif
        
        <div class="form-group">
            <label for="">Kategori Artikel</label>
            <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                <option value="{{ $data->kategori_id }}">{{ $data->kategori->nama }}</option>
                @foreach( $kategori as $item)
                <option value="{{$item->id}}" @selected($data->ketegori_id == $item->id)>{{$item ->nama}}</option>
                @endforeach
            </select>
        </div>
        
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
    </form>
</div>
@endsection

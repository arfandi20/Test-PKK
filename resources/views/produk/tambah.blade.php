
@extends('layouts.app')

@section('content')
<div class="container">
    <h1> Tambah Data </h1>
    
    <form action="{{ route ('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nama Produk </label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" placeholder="masukkan nama produk" value="{{ old('nama_produk')}}">
        </div>
        <div class="form-group">
            <label for="">foto</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" placeholder="masukkan foto" value="{{ old('foto')}}">
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" placeholder="masukkan harga" value="{{ old('harga')}}">
        </div>
        <div class="form-group">
            <label for="">Deskripsi Produk</label>
            <textarea class="form-control @error('desc_produk') is-invalid @enderror" name="desc_produk" placeholder="masukkan deskripsi" value="{{ old('desc_produk')}}"></textarea>
        </div>
        <div class="form-group">
            <label for="">Kategori Artikel</label>
            <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                <option value="">Pilih Kategori</option>
                @foreach($kategori as $item)
                <option value="{{ $item->id }}" @selected(old('kategori')==$item->id)>{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
    </form>
</div>
@endsection
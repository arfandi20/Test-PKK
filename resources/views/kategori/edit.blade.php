
@extends('layouts.app')

@section('content')
<div class="container">
    <h1> Edit Data </h1>
    
    <form action="{{ url ('kategori/'. $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{$data->nama}}">
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{$data->desc}}">
        </div>
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
    </form>
</div>
@endsection
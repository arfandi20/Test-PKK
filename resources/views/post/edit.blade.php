@extends('layouts.app')

@section('content')
<div class="container">
    <h1> Edit Data </h1>
    
    <form action="{{ url ('post/'. $data->id) }}" method="POST">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$data->judul}}">
        </div>
     
        <div class="form-group">
            <label for="">Isi</label>
            <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" value="">{{$data->isi}}</textarea>
        </div>

        <div class="form-group">
            <label for="">Tanggal</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{$data->tanggal}}">
        </div>
        
        @if (Auth::user()->role == 'admin')
        <div class="form-group">
            <label for="">Status</label>
            <select class="form-select" aria-label="Default select example" name="status">
                <option selected>{{ $data->status }}</option>
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

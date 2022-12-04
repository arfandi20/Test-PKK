@extends('layouts.app')

@section('content')
@foreach ($data as $item)
<div class="container mt-3 mb-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ $item->judul }}</div>

                <div class="card-body">
                    <h6 class="card-title">{{ $item->isi }}</h6>
                    <p class="card-text">{{ $item->tanggal }}</p>
                    <a style="text-decoration: none;color:#000" href="{{ route('post.detail', $item->id) }}" type="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@extends('layouts.app')

@section('content')
@foreach ($data as $item)
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ $item->judul }}</div>

                <div class="card-body">
                    <h6 class="card-title">{{ $item->isi }}</h6>
                    <p class="card-text">{{ $item->tanggal }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

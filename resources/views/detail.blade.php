@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $post->judul }}</div>

                    <div class="card-body">
                        isi :
                        <br>
                        {{ $post->isi }}
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                Author : {{ $post->penulis }}
                            </div>
                            <div class="col-6 text-end">
                                Date Created : {{ $post->created_at }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

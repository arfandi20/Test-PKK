
@extends('layouts.app')

@section('content')

<div class="container">
    <h1> Edit Data </h1>
    
    <form action="{{ url ('user/'. $data->id) }}" method="POST" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email}}">
        </div>

        <div class="form-group">
            <label for="">Role (admin/editor)</label>
            {{-- <input type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{$data->role}}"> --}}
            <select class="form-select" aria-label="Default select example" name="role">
                <option selected>Open this select menu</option>
                <option value="admin" @selected($data->role=='admin')>admin</option>
                <option value="editor" @selected($data->role=='editor')>editor</option>
            </select>
        </div>

        {{-- <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  value="{{$data->password}}">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control @error('confir') is-invalid @enderror" name="confir" value="{{$data->password}}">
        </div> --}}
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
    </form>
</div>
@endsection
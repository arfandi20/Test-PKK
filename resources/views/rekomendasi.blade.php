@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <div class="col-md-6">
                     <div class="card">
                            <div class="card-header">Keluhan</div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Jenis Keluhan </label>
                                    <select class="form-select" aria-label="Default select example" name="status" id="keluhan">
                                        <option selected>Pilih Keluhan</option>
                                        <option value="keseleo dan kurang nafsu makan" >keseleo dan kurang nafsu makan</option>
                                        <option value="pegal-pegal">pegal-pegal</option>
                                        <option value="keluhan darah tinggi dan gula darah">keluhan darah tinggi dan gula darah</option>
                                        <option value="kram perut dan masuk angin">kram perut dan masuk angin</option>
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Tahun Lahir</label>
                                    {{-- <input type="number" class="form-control mt-3" id="lahir"> --}}
                                    <select class="form-select" name="lahir" id="lahir">
                                        <option selected>Pilih Tahun lahir</option>
                                        @for($i = 1800; $i < date("Y"); $i++) <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <input type="button" class="btn btn-primary mt-3" value="Hasil" onclick="hasil()">
                            </div>
                        </div>
                </div>
                <div class= col-md-6>
                        <div class="card">
                            <div class="card-header">Hasil</div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Keluhan</label>
                                    <input type="text" class="form-control mt-3" id="hasilkeluhan">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Nama Jamu</label>
                                    <input type="text" class="form-control mt-3" id="nama_jamu">
                                </div>
                                
                                <div class="form-group mt-3">
                                    <label for="">Umur</label>
                                    <input type="number" class="form-control mt-3" id="umur" placeholder="">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Saran Penggunaan</label>
                                    <input type="text" class="form-control mt-3" id="saran">
                                </div>

                                <input type="button" class="btn btn-primary mt-3" value="Hapus" onclick="hapus()">
                            </div>
                        </div>
                </div>
        </div>
    </div>
@endsection

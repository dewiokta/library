@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Rak Buku</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('rak.update', $rak->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="nama_rak" class="col-md-4 col-form-label ">Nama Rak Buku</label>

                            <div class="col-md-6">
                                <input id="nama_rak" type="text" class="form-control @error('nama_rak') is-invalid @enderror" name="nama_rak" 
                                value="{{ old('nama_rak', $rak->nama_rak) }}" required  autofocus>

                                @error('nama_rak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lokasi_rak" class="col-md-4 col-form-label ">Lokasi Rak Buku</label>

                            <div class="col-md-6">
                                <input id="lokasi_rak" type="text" class="form-control @error('lokasi_rak') is-invalid @enderror" name="lokasi_rak" 
                                value="{{ old('lokasi_rak', $rak->lokasi_rak) }}" required  autofocus>

                                @error('lokasi_rak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Anggota</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('anggota.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nama_anggota" class="col-md-4 col-form-label ">Nama Anggota</label>

                            <div class="col-md-6">
                                <input id="nama_anggota" type="text" class="form-control @error('nama_anggota') is-invalid @enderror" name="nama_anggota" value="{{ old('nama_anggota') }}" required autofocus>

                                @error('nama_anggota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jenis_kelamin" class="col-md-4 col-form-label ">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" aria-label="Default select example">
                                    <option selected>-----</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                </select>

                                @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no_telp" class="col-md-4 col-form-label ">Nomor Telfon</label>

                            <div class="col-md-6">
                                <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required autofocus>

                                @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label ">alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @error('alamat')
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
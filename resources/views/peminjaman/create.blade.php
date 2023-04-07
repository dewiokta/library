@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Peminjaman</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('peminjaman.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="anggota_id" class="col-md-4 col-form-label ">Nama Anggota</label>

                            <div class="col-md-6">
                                <select name="anggota_id" id="anggota_id" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Anggota</option>
                                    @foreach ($anggotum as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_anggota }}</option>
                                    @endforeach
                                </select>

                                @error('anggota_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="petugas_id" class="col-md-4 col-form-label ">Nama Petugas</label>

                            <div class="col-md-6">
                                <select name="petugas_id" id="petugas_id" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Petugas</option>
                                    @foreach ($petuga as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_petugas }}</option>
                                    @endforeach
                                </select>

                                @error('petugas_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="buku_id" class="col-md-4 col-form-label ">Judul Buku</label>

                            <div class="col-md-6">
                                <select name="buku_id" id="buku_id" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Buku</option>
                                    @foreach ($book as $item)
                                    <option value="{{ $item->id }}">{{ $item->judul_buku }}</option>
                                    @endforeach
                                </select>

                                @error('buku_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="tgl_pinjam" class="col-md-4 col-form-label ">Tanggal Pinjam</label>

                            <div class="col-md-6">
                                <input id="tgl_pinjam" type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" name="tgl_pinjam" 
                                value="{{ old('tgl_pinjam') }}" required autofocus>

                                @error('tgl_pinjam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tgl_kembali" class="col-md-4 col-form-label ">Tanggal Kembali</label>

                            <div class="col-md-6">
                                <input id="tgl_kembali" type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" name="tgl_kembali" 
                                value="{{ old('tgl_kembali') }}" required autofocus>

                                @error('tgl_kembali')
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
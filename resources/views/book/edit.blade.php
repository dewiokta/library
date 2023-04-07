@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Buku</div>

                <div class="card-body">
                <form method="POST" action="{{ route('book.update', $book->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="rak_id" class="col-md-4 col-form-label ">Rak Buku</label>

                            <div class="col-md-6">
                                <select name="rak_id" id="rak_id" class="form-select" aria-label="Default select example">
                                    
                                @foreach ($rak as $item)
                                <option value="{{ old('rak_id', $item->id) }}">{{ old('rak_id', $item->nama_rak) }}</option>
                                    
                                    <option value="{{ $item->id }}">{{ $item->nama_rak }}</option>
                                    @endforeach
                                </select>

                                @error('rak_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kode_buku" class="col-md-4 col-form-label ">Kode Buku</label>

                            <div class="col-md-6">
                                <input id="kode_buku" type="text" class="form-control @error('kode_buku') is-invalid @enderror" name="kode_buku" 
                                value="{{ old('kode_buku', $book->kode_buku) }}" required autofocus>

                                @error('kode_buku')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="judul_buku" class="col-md-4 col-form-label ">Judul Buku</label>

                            <div class="col-md-6">
                                <input id="judul_buku" type="text" class="form-control @error('judul_buku') is-invalid @enderror" name="judul_buku" 
                                value="{{ old('judul_buku', $book->judul_buku) }}" required autofocus>

                                @error('judul_buku')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="penulis" class="col-md-4 col-form-label ">Penulis</label>

                            <div class="col-md-6">
                                <input id="penulis" type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" 
                                value="{{ old('penulis', $book->penulis) }}" required autofocus>

                                @error('penulis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="penerbit" class="col-md-4 col-form-label ">Penerbit</label>

                            <div class="col-md-6">
                                <input id="penerbit" type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" 
                                value="{{ old('penerbit',$book->penerbit) }}" required autofocus>

                                @error('penerbit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="thn_terbit" class="col-md-4 col-form-label ">Tahun Terbit</label>

                            <div class="col-md-6">
                                <input id="thn_terbit" type="date" class="form-control @error('thn_terbit') is-invalid @enderror" name="thn_terbit" 
                                value="{{ old('thn_terbit',$book->thn_terbit) }}" required autofocus>

                                @error('thn_terbit')
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

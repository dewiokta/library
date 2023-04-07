@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daftar Buku</h5>
                <div class="row">
                    <div class="col-sm-6 p-3">
                        <a href="{{ route('book.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                    </div>
                    <div class="col-sm-6 p-3 d-flex justify-content-end">
                        <form id="search" method="GET" action="{{ route('book.index') }}">
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <label for="judul_buku">Name</label>
                                    <input type="text" name="judul_buku" class="form-control" id="judul_buku" placeholder="Nama">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                <a class="btn btn-secondary" href="{{ route('book.index') }}">Reset</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tempat Buku</th>
                            <th scope="col">Kode Buku</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($book as $key => $item)
                        <tr>
                            <td>{{ $book->firstItem() + $key }}</td>
                            <td>{{ $item->nama_rak }}</td>
                            <td>{{ $item->kode_buku }}</td>
                            <td>{{ $item->judul_buku }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->thn_terbit }}</td>
                            <td>
                                <div class="d-flex ">
                                    <a href="{{ route('book.edit', $item->id) }}" class="btn btn-sm btn-info btn-icon ">
                                        Edit</a>
                                    <form action="{{ route('book.destroy', $item->id) }}" method="POST" class="ml-2">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-sm btn-danger btn-icon ">Delete </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>

    </div>
</div>

@endsection
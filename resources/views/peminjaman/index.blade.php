@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daftar Peminjam</h5>

                <div class="row">
                    <div class="col-sm-6 p-3">
                        <a href="{{ route('peminjaman.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                    </div>
                    <div class="col-sm-6 p-3 d-flex justify-content-end">
                        <form id="search" method="GET" action="{{ route('peminjaman.index') }}">
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <label for="nama_anggota">Name</label>
                                    <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" placeholder="Nama">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                <a class="btn btn-secondary" href="{{ route('peminjaman.index') }}">Reset</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Anggota</th>
                            <th scope="col">Nama Petugas</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peminjaman as $key => $item)
                        <tr>
                            <td>{{ $peminjaman->firstItem() + $key }}</td>
                            <td>{{ $item->nama_anggota }}</td>
                            <td>{{ $item->nama_petugas }}</td>
                            <td>{{ $item->buku }}</td>
                            <td>{{ $item->tgl_pinjam}}</td>
                            <td>{{ $item->tgl_kembali }}</td>
                            <td>
                                <div class="d-flex ">
                                    <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-sm btn-info btn-icon ">
                                        Edit</a>
                                    <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" class="ml-2">
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
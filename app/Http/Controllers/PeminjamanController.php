<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use App\Models\Anggota;
use App\Models\Book;
use App\Models\Peminjaman;
use App\Models\Petuga;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):View
    {
        $peminjaman = DB::table('peminjamen')
        ->select('peminjamen.*','anggotas.nama_anggota as nama_anggota',
        'petugas.nama_petugas as nama_petugas','books.judul_buku as buku')
        ->join('anggotas','peminjamen.anggota_id', '=','anggotas.id')
        ->join('petugas','peminjamen.petugas_id', '=','petugas.id')
        ->join('books','peminjamen.buku_id', '=','books.id')
        ->when($request->input('nama_anggota'), function ($query, $name) {
            return $query->where('anggotas.nama_anggota', 'like', '%' . $name . '%');
        })
        ->paginate(10);
    return view('peminjaman.index', compact('peminjaman'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $anggotum = Anggota::all();
        $petuga = Petuga::all();
        $book = Book::all();
        $peminjaman = Peminjaman::all();
        return view('peminjaman.create', compact('book','anggotum','petuga','peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeminjamanRequest $request)
    {
        Peminjaman::create($request->validated());
        return redirect()->route('peminjaman.index')->with('Success','Data Berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman):View
    {
        $anggotum = Anggota::all();
        $petuga = Petuga::all();
        $book = Book::all();
        return view('peminjaman.edit', compact('anggotum','petuga','book','peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeminjamanRequest $request, Peminjaman $peminjaman)
    {
        $peminjaman->update($request->validated());
        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with('Success','Data berhasil diapus');
    }
}

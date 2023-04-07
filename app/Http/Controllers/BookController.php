<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Rak;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):View
    {
        $book = DB::table('books')
        ->select('books.*','raks.nama_rak as nama_rak')
        ->join('raks','books.rak_id', '=','raks.id')
        ->when($request->input('judul_buku'), function ($query, $name) {
            return $query->where('books.judul_buku', 'like', '%' . $name . '%');
        })
        ->paginate(10);
    return view('book.index', compact('book'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $book = Book::all();
        $rak = Rak::all();
        return view('book.create',compact('book','rak'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        Book::create($request->validated());
        return redirect()->route('book.index')->with('Success','Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book):View
    {
        $rak = Rak::all();
        return view('book.edit', compact('book','rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return redirect()->route('book.index')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index')->with('Success','Data berhasil diapus');
    }
}

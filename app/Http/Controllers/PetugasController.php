<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePetugasRequest;
use App\Http\Requests\UpdatePetugasRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Petuga;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):View
    {
        $petugass = DB::table('petugas')
            ->when($request->input('nama_petugas'), function ($query, $name) {
                return $query->where('nama_petugas', 'like', '%' . $name . '%');
            })
            ->paginate(10);
        return view('petugas.index', compact('petugass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('petugas.create');
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetugasRequest $request)
    {
        Petuga::create($request->validated());
        return redirect()->route('petugas.index')->with('Success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petuga $petuga)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petuga $petuga):View
    {
        return view('petugas.edit', compact('petuga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetugasRequest $request, Petuga $petuga)
    {
        $petuga->update($request->validated());
        return redirect()->route('petugas.index')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petuga $petuga)
    {
        $petuga->delete();
        return redirect()->route('petugas.index')->with('success', 'Data berhasil dihapus');
    }
}

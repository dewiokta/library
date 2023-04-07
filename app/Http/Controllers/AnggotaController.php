<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnggotaRequest;
use App\Http\Requests\UpdateAnggotaRequest;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $anggotum = DB::table('anggotas')
            ->when($request->input('nama_anggota'), function ($query, $name) {
                return $query->where('nama_anggota', 'like', '%' . $name . '%');
            })
            ->paginate(10);
        return view('anggota.index', compact('anggotum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnggotaRequest $request)
    {
        Anggota::create($request->validated());
        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggotum):View
    {
        return view('anggota.edit', compact('anggotum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnggotaRequest $request, Anggota $anggotum)
    {
        $anggotum->update($request->validated());
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggotum)
    {
        $anggotum->delete();
        return redirect()->route('anggota.index')->with('success','Data Berhasil dihapus');
    }
}

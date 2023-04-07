<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRakRequest;
use App\Http\Requests\UpdateRakRequest;
use App\Models\Rak;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):View
    {
        $rak = DB::table('raks')
        ->when($request->input('nama_rak'), function ($query, $name) {
            return $query->where('nama_rak', 'like', '%' . $name . '%');
        })
        ->paginate(10);
    return view('rak.index', compact('rak'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('rak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRakRequest $request)
    {
        Rak::create($request->validated());
        return redirect()->route('rak.index')->with('Succes','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rak $rak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rak $rak):View
    {
        return view('rak.edit', compact('rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRakRequest $request, Rak $rak)
    {
        $rak->update($request->validated());
        return redirect()->route('rak.index')->with('Success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rak $rak)
    {
        $rak->delete();
        return redirect()->route('rak.index')->with('Success','Data berhasil dihapus');
    }
}

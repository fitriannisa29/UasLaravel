<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = barang::all();
        return view('barang.index', compact('rows')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        barang::create([
            'barang_nama' =>$request->barang_nama,
            'barang_jenis' =>$request->barang_jenis,
            'barang_harga' =>$request->barang_harga
        ]) ;

        return redirect('barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row=barang::find($id);
        return view ('barang.edit', compact('row')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row= barang::findOrFail($id);

        $row->update([
            'barang_nama' =>$request->barang_nama,
            'barang_jenis' =>$request->barang_jenis,
            'barang_harga' =>$request->barang_harga
        ]);

        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row= barang::findOrFail($id);

        $row->delete();

        return redirect('barang');
    }
}

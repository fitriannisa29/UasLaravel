<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pesanan;

class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = pesanan::all();
        return view('pesanan.index', compact('rows')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pesanan::create([
            'pesanan_nama' =>$request->pesanan_nama,
            'pesanan_jumlah' =>$request->pesanan_jumlah,
            'pesanan_nama_barang' =>$request->pesanan_nama_barang
        ]) ;

        return redirect('pesanan');
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
        $row=pesanan::find($id);
        return view ('pesanan.edit', compact('row')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row= pesanan::findOrFail($id);

        $row->update([
            'pesanan_nama' =>$request->pesanan_nama,
            'pesanan_jumlah' =>$request->pesanan_jumlah,
            'pesanan_nama_barang' =>$request->pesanan_nama_barang
        ]);

        return redirect('pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row= pesanan::findOrFail($id);

        $row->delete();

        return redirect('pesanan');
    }
}

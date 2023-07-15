<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pln;

class plnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = pln::all();
        return view('pln.index', compact('rows')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pln.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pln::create([
            'pln_nama' =>$request->pln_nama,
            'pln_alamat' =>$request->pln_alamat,
            'pln_nohp' =>$request->pln_nohp
        ]) ;

        return redirect('pln');
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
        $row=pln::find($id);
        return view ('pln.edit', compact('row')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row= pln::findOrFail($id);

        $row->update([
            'pln_nama' =>$request->pln_nama,
            'pln_alamat' =>$request->pln_alamat,
            'pln_nohp' =>$request->pln_nohp
        ]);

        return redirect('pln');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row= pln::findOrFail($id);

        $row->delete();

        return redirect('pln');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use App\Http\Requests\StoreSupirRequest;
use App\Http\Requests\UpdateSupirRequest;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supir = supir::all();
        return view('admin.masterdata.supir.index', compact('supir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masterdata.supir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupirRequest $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:drivers',
            'alamat' => 'required',
            'tahun_lahir' => 'required|date'
        ]);

        $supir = new Supir([
            'nama' => $request->get('nama'),
            'nik' => $request->get('nik'),
            'alamat' => $request->get('alamat'),
            'tahun_lahir' => $request->get('tahun_lahir')
        ]);

        $supir->save();

        return redirect('/supir')->with('success', 'Driver created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supir $supir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supir $id)
    {
        $supir = Driver::find($id);
        return view('admin.masterdata.supir.edit', compact('supir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupirRequest $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:drivers,nik,'.$id,
            'alamat' => 'required',
            'tahun_lahir' => 'required|date'
        ]);

        $supir = Supir::find($id);
        $supir->nama = $request->get('nama');
        $supir->nik = $request->get('nik');
        $supir->alamat = $request->get('alamat');
        $supir->tahun_lahir = $request->get('tahun_lahir');
        $supir->save();

        return redirect('/supir')->with('success', 'Driver updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $supir = Supir::find($id);
        $supir->delete();

        return redirect('/supir')->with('success', 'Driver deleted successfully');
    }
}

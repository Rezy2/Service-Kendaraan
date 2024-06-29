<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\StoreKendaraanRequest;
use App\Http\Requests\UpdateKendaraanRequest;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = kendaraan::all();
        return view('admin.masterdata.kendaraan.index', compact('kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masterdata.kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKendaraanRequest $request)
    {
        $request->validate([
            'nomor_kendaraan' => 'required|unique:kendaraan',
            'jenis_kendaraan' => 'required',
            'merk_kendaraan' => 'required',
            'tahun_pembuatan' => 'required|integer',
            'supir_id' => 'required|integer'
        ]);

        $kendaraan = new Vehicle([
            'nomor_kendaraan' => $request->get('nomor_kendaraan'),
            'jenis_kendaraan' => $request->get('jenis_kendaraan'),
            'merk_kendaraan' => $request->get('merk_kendaraan'),
            'tahun_pembuatan' => $request->get('tahun_pembuatan'),
            'supir_id' => $request->get('supir_id')
        ]);

        $kendaraan->save();

        return redirect('/kendaraan')->with('success', 'Vehicle created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $id)
    {
        $kendaraan = Kendaraan::find($id);
        return view('admin.masterdata.kendaraan.edit', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKendaraanRequest $request, $id)
    {
        $request->validate([
            'nomor_kendaraan' => 'required|unique:kendaraan,nomor_kendaraan'.$id,
            'jenis_kendaraan' => 'required',
            'merk_kendaraan' => 'required',
            'tahun_pembuatan' => 'required|integer',
            'supir_id' => 'required|integer'
        ]);

        $kendaraan = kendaraan::find($id);
        $kendaraan->nomor_kendaraan = $request->get('nomor_kendaraan');
        $kendaraan->jenis_kendaraan = $request->get('jenis_kendaraan');
        $kendaraan->merk_kendaraan = $request->get('merk_kendaraan');
        $kendaraan->tahun_pembuatan = $request->get('tahun_pembuatan');
        $kendaraan->supir_id = $request->get('supir_id');
        $kendaraan->save();

        return redirect('/kendaraan')->with('success', 'Vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kendaraan = Vehicle::find($id);
        $kendaraan->delete();

        return redirect('/kendaraan')->with('success', 'Vehicle deleted successfully');
    }
}

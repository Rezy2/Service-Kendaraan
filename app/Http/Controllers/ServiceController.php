<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('supir.masterdata.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supir.masterdata.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $validatedData = $request->validate([
            'kendaraan_id' => 'required|integer|exists:kendaraans,id',
            'supir_id' => 'required|integer|exists:supirs,id',
            'keterangan' => 'required|string',
            'tanggal_pengajuan' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed',
            'total_service' => 'required|numeric',
        ]);

        Service::create($validatedData);

        return redirect()->route('supir.masterdata.service.index')->with('success', 'Data service berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('supir.masterdata.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        $request->validate([
            'kendaraan_id' => 'required|integer',
            'supir_id' => 'required|integer',
            'keterangan' => 'required|string',
            'tanggal_pengajuan' => 'required|date',
            'tanggal_selesai' => 'nullable|date',
            'status' => 'required|string',
            'total_service' => 'required|numeric',
        ]);

        $service->update($request->all());

        return redirect()->route('supir.masterdata.service.index')
                        ->with('success', 'Service updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('supir.service.index')
                        ->with('success', 'Service deleted successfully.');
    }
}

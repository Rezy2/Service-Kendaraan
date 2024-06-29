<?php

namespace App\Http\Controllers;

use App\Models\RincianBiayaService;
use App\Http\Requests\StoreRincianBiayaServiceRequest;
use App\Http\Requests\UpdateRincianBiayaServiceRequest;

class RincianBiayaServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $RincianBiayaServices = RincianBiayaService::all();
        return view('bengkel.masterdata.rincian_biaya_services.index', compact('RincianBiayaServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bengkel.masterdata.rincian_biaya_services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|integer',
            'keterangan' => 'required|string',
            'biaya' => 'required|numeric',
        ]);

        $RincianBiayaServices = new RincianBiayaService([
            'service_id' => $request->get('service_id'),
            'keterangan' => $request->get('keterangan'),
            'biaya' => $request->get('biaya'),
        ]);

        $RincianBiayaServices->save();

        return redirect('/rincian_biaya')->with('success', 'RincianBiayaService created successfully');
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
    public function edit(RincianBiayaService $id)
    {
        return view('bengkel.masterdata.rincian_biaya_services.edit', compact('RincianBiayaService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'service_id' => 'required|integer',
            'keterangan' => 'required|string',
            'biaya' => 'required|numeric',
        ]);

        $RincianBiayaService = RincianBiayaService::find($id);
        $RincianBiayaService->service_id = $request->get('service_id');
        $RincianBiayaService->keterangan = $request->get('keterangan');
        $RincianBiayaService->biaya = $request->get('biaya');
        $RincianBiayaService->save();

        return redirect('/rincian_biaya')->with('success', 'RincianBiayaService updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $RincianBiayaService->delete();

        return redirect()->route('bengkel.masterdata.rincian_biaya_services.index')
                         ->with('success', 'Rincian biaya berhasil dihapus.');
    }
}

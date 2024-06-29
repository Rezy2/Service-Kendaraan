@extends('admin.layout.master')

@section('title', 'Edit Data Rincian Biaya Service')

@section('content')

     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Edit Data Rincian Biaya Service</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/rincian_biaya">Rincian Biaya Service</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

     <!-- page content -->
     <form method="POST" action="{{ route('/rincian_biaya/update', $RincianBiayaService->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nomor_kendaraan">Nomor Service:</label>
            <input type="text" class="form-control" name="service_id" value="{{ $RincianBiayaService->service_id }}"/>
        </div>
        <div class="form-group">
            <label for="jenis_kendaraan">Keterangan:</label>
            <input type="text" class="form-control" name="keterangan" value="{{ $RincianBiayaService->keterangan }}"/>
        </div>
        <div class="form-group">
            <label for="merk_kendaraan">Rincian Biaya Service:</label>
            <input type="text" class="form-control" name="biaya" value="{{ $RincianBiayaService->biaya }}"/>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
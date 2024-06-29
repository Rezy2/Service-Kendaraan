@extends('admin.layout.master')

@section('title', 'Edit Data Service')

@section('content')

     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Edit Data Service</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/service">Service</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

     <!-- page content -->
     <form action="{{ route('service.update', $service->id) }}" method="POST">
      @csrf
      @method('PUT')
      <label for="kendaraan_id">Nomor Kendaraan:</label>
      <input type="number" name="kendaraan_id" value="{{ $service->kendaraan_id }}" required>
      
      <label for="supir_id">ID Supir:</label>
      <input type="number" name="supir_id" value="{{ $service->supir_id }}" required>

      <label for="keterangan">Keterangan:</label>
      <input type="text" name="keterangan" value="{{ $service->keterangan }}" required>

      <label for="tanggal_pengajuan">Tanggal Pengajuan:</label>
      <input type="date" name="tanggal_pengajuan" value="{{ $service->tanggal_pengajuan }}" required>

      {{-- <label for="tanggal_selesai">Tanggal Selesai:</label>
      <input type="date" name="tanggal_selesai" value="{{ $service->tanggal_selesai }}">

      <label for="total_service">Total Service:</label>
      <input type="number" step="0.01" name="total_service" value="{{ $service->total_service }}" required> --}}

      <button type="submit">Update</button>
  </form>
@endsection
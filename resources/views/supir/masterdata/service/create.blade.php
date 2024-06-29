@extends('admin.layout.master')

@section('title', 'Tambah Data Service')

@section('content')
     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Tambah Data Service</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/service">Service</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
     
        <form action="{{ route('service.store') }}" method="POST">
          @csrf
          <label for="kendaraan_id">Nomor Kendaraan:</label>
          <input type="number" class="form-control" name="kendaraan_id" required>
          
          <label for="supir_id">ID Supir:</label>
          <input type="number" class="form-control" name="supir_id" required>
  
          <label for="keterangan">Keterangan:</label>
          <input type="text" class="form-control" name="keterangan" required>
  
          <label for="tanggal_pengajuan">Tanggal Pengajuan:</label>
          <input type="date" class="form-control" name="tanggal_pengajuan" required>
  
          {{-- <label for="tanggal_selesai">Tanggal Selesai:</label>
          <input type="date" name="tanggal_selesai">
  
          <label for="total_service">Total Service:</label>
          <input type="number" step="0.01" name="total_service" required> --}}
  
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
  @endsection
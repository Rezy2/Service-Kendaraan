@extends('admin.layout.master')

@section('title', 'Edit Data Kendaraan')

@section('content')

     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Edit Data Kendaraan</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/kendaraan">Kendaraan</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

     <!-- page content -->
     <form method="POST" action="{{ route('/kendaraan/update', $kendaraan->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nomor_kendaraan">Nomor Kendaraan:</label>
            <input type="text" class="form-control" name="nomor_kendaraan" value="{{ $kendaraan->vehicle_number }}"/>
        </div>
        <div class="form-group">
            <label for="jenis_kendaraan">Jenis Kendaraan:</label>
            <input type="text" class="form-control" name="jenis_kendaraan" value="{{ $kendaraan->vehicle_type }}"/>
        </div>
        <div class="form-group">
            <label for="merk_kendaraan">Merk Kendaraan:</label>
            <input type="text" class="form-control" name="merk_kendaraan" value="{{ $kendaraan->vehicle_brand }}"/>
        </div>
        <div class="form-group">
            <label for="tahun_pembuatan">Tahun Pembuatan:</label>
            <input type="number" class="form-control" name="tahun_pembuatan" value="{{ $kendaraan->manufacture_year }}"/>
        </div>
        <div class="form-group">
            <label for="supir_id">ID Supir:</label>
            <input type="number" class="form-control" name="supir_id" value="{{ $kendaraan->driver_id }}"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
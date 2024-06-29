@extends('admin.layout.master')

@section('title', 'Tambah Data Kendaraan')

@section('content')
     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Tambah Data Kendaraan</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/kendaraan">Kendaraan</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
     
        <form method="POST" action="/kendaraan/store">
          @csrf
          <div class="form-group">
              <label for="nomor_kendaraan">Nomor Kendaraan:</label>
              <input type="text" class="form-control" name="nomor_kendaraan"/>
          </div>
          <div class="form-group">
              <label for="jenis_kendaraan">Jenis Kendaraan:</label>
              <input type="text" class="form-control" name="jenis_kendaraan"/>
          </div>
          <div class="form-group">
              <label for="merk_kendaraan">Merk Kendaraan:</label>
              <input type="text" class="form-control" name="merk_kendaraan"/>
          </div>
          <div class="form-group">
              <label for="tahun_pembuatan">Tahun Pembuatan:</label>
              <input type="number" class="form-control" name="tahun_pembuatan"/>
          </div>
          <div class="form-group">
              <label for="supir_id">ID Supir:</label>
              <input type="number" class="form-control" name="supir_id"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
@endsection
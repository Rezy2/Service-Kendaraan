@extends('admin.layout.master')

@section('title', 'Tambah Data Rincian Biaya Service')

@section('content')
     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Tambah Data Rincian Biaya Service</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/rincian_biaya">Rincian Biaya</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
     
        <form method="POST" action="/rincian_biaya/store">
          @csrf
          <div class="form-group">
              <label for="">Nomor Service:</label>
              <input type="text" class="form-control" name="service_id"/>
          </div>
          <div class="form-group">
              <label for="jenis_kendaraan">Keterangan:</label>
              <input type="text" class="form-control" name="keterangan"/>
          </div>
          <div class="form-group">
              <label for="merk_kendaraan">Rincian Biaya Service:</label>
              <input type="text" class="form-control" name="biaya"/>
          </div>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
@endsection
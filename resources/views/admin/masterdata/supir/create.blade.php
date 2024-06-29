@extends('admin.layout.master')

@section('title', 'Input Data Vehicle')

@section('content')
     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Data Tables</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/kendaraan">Kendaraan</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
     
        <form method="POST" action="/supir/store">
          @csrf
          <div class="form-group">
              <label for="nama">Nama:</label>
              <input type="text" class="form-control" name="nama"/>
          </div>
          <div class="form-group">
              <label for="nik">NIK:</label>
              <input type="text" class="form-control" name="nik"/>
          </div>
          <div class="form-group">
              <label for="alamat">Alamat:</label>
              <textarea class="form-control" name="alamat"></textarea>
          </div>
          <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir:</label>
              <input type="date" class="form-control" name="tanggal_lahir"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
@endsection
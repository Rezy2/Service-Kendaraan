@extends('admin.layout.master')

@section('title', 'Edit Data Supir')

@section('content')

     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Edit Data Supir</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/supir">Supir</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
     <!-- page content -->
     <form method="POST" action="{{ route('/supir/update', $supir->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" value="{{ $supir->name }}"/>
        </div>
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" class="form-control" name="nik" value="{{ $supir->nik }}"/>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" name="alamat">{{ $supir->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="{{ $supir->birth_date }}"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
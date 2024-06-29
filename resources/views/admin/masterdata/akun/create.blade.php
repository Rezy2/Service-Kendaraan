@extends('admin.layout.master')

@section('title', 'Tambah Data Akun')

@section('content')
     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Tambah Data Akun</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/akun">Akun</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
          <form enctype="multipart/form-data" action="/akun/store" method="post" novalidate>
            @csrf
            <div class="row mb-3">
              <label for="input Nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="nama" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input Email" class="col-sm-2 col-form-label">E-mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input Password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input Role" class="col-sm-2 col-form-label">Role</label>
              <div class="col-sm-10">
                <input type="role" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit Form</button>
              </div>
            </div>

          </form>
@endsection
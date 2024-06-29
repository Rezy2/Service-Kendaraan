@extends('admin.layout.master')

@section('title', 'Edit Data Akun')

@section('content')

     <!-- page content -->
     <main id="main" class="main">

        <div class="pagetitle">
          <h1>Edit Data Akun</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/akun">Akun</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

     <!-- page content -->
     <h1>Edit Akun</h1>
    <form method="POST" action="{{ route('/akun/update', $user->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" value="{{ $user->name }}"/>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}"/>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password"/>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <input type="text" class="form-control" name="role" value="{{ $user->role }}"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
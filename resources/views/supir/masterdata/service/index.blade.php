@extends('admin.layout.master')

@section('title', 'Data Service')

@section('content')
    
<ul>      <li class="nav-item">
  <a class="nav-link collapsed" href="admin.layout.error.error404">
    <i class="bi bi-dash-circle"></i>
    <span>Error 404</span>
  </a>
</li><!-- End Error 404 Page Nav -->

<li class="nav-item">
  <a class="nav-link collapsed" href="pages-blank.html">
    <i class="bi bi-file-earmark"></i>
    <span>Blank</span>
  </a>
</li><!-- End Blank Page Nav -->

</ul>
        <!-- page content -->
        <main id="main" class="main">

          <div class="pagetitle">
            <h1>Service</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Service</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
      
          <style>
            .header-row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }
          </style>

          <div class="container">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
            <div class="col-md-12 col-sm-12">
            <div class="header-row">
              <h2>Tabel Data Service</h2>
              <a href="/service/create" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data Service</a>
            </div>
              @if ($message = Session::get('success'))
              <div class="alert alert-success mt-2">
                  {{ $message }}
            </div>
              @endif
              
          <section class="section">
            <div class="row">
              <div class="col-lg-12">
      
                <div class="card">
                  <div class="card-body">
        
                        <div class="filter">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                            </li>
        
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                          </ul>
                        </div>
                   
                    <table class="datatable" class="table table-striped table-bordered " style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor Kendaraan</th>
                          <th>ID Supir</th>
                          <th>Keterangan</th>
                          <th>Tanggal Pengajuan</th>
                          <th>Tanggal Selesai</th>
                          <th>Status</th>
                          <th>Total Service</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->kendaraan_id }}</td>
                            <td>{{ $service->supir_id }}</td>
                            <td>{{ $service->keterangan }}</td>
                            <td>{{ $service->tanggal_pengajuan }}</td>
                            <td>{{ $service->tanggal_selesai }}</td>
                            <td>{{ $service->status }}</td>
                            <td>{{ $service->total_service }}</td>
                            <td>
                                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('service.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endsection
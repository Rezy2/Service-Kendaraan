@extends('admin.layout.master')

@section('title', 'Data Kendaraan')

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
            <h1>Kendaraan</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Kendaraan</li>
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
              <h2>Tabel Data Kendaraan</h2>
              <a href="/kendaraan/create" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data Kendaraan</a>
            </div>
            
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
                          <th>Jenis Kendaraan</th>
                          <th>Merk Kendaraan</th>
                          <th>Tahun Pembuatan</th>
                          <th>ID Supir</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($kendaraan as $kendaraan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kendaraan->nomor_kendaraan }}</td>
                                <td>{{ $kendaraan->jenis_kendaraan }}</td>
                                <td>{{ $kendaraan->merk_kendaraan }}</td>
                                <td>{{ $kendaraan->tahun_pembuatan }}</td>
                                <td>{{ $kendaraan->supir_id }}</td>
                                <td>
                                    <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    <!-- End Table with stripped rows -->
      
                  </div>
                </div>
      
              </div>
            </div>
          </section>
      
        </main><!-- End #main -->
      

@endsection
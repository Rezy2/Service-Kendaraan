@extends('admin.layout.master')

@section('title', 'Data Akun')

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
            <h1>Akun</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Akun</li>
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
              <h2>Tabel Data Akun</h2>
              <a href="/akun/create" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data Akun</a>
            </div>
          <section class="section">
            <div class="row">
              <div class="col-lg-12">
      
                <div class="card">
                  <div class="card-body">
      
                    <!-- Table with stripped rows -->
                    <style>
                      table {text-align: center};
                   </style>

                    <table class="table datatable">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Password</th>
                          <th scope="col">Role</th>
                          <th scope="col">Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($user as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $akun->email }}</td>
                            <td>******</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a href="{{ route('akun.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('akun.destroy', $akun->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
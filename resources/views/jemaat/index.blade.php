<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jemaat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/Admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/Admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/Admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/Admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              
              </p>
            </a>
            
          </li>

          <li class="nav-item">
            <a href="{{ url('/jemaat/index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Jemaat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/Sidi/index')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Sidi
             
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="{{ url('/Baptis/index')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Baptis
            
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{ url('/Nikah/index')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Nikah
           
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{ url('/Kematian/index')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Kematian
              
              </p>
            </a>

            <li class="nav-item">
            <a href="{{ url('/KK/index')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Kartu Keluarga
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/Masuk/index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Atestasi Masuk
               
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('/Keluar/index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Atestasi Keluar
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf                       
           </form>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-15">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Jemaat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/jemaat/tambah_jem" class="btn btn-success my-3" target="_blank">Add</a><br>
                <table id="jemaat" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th> No </th>
                        <th scope="col">Daftar</th>
                        <th scope="col">Kode Jemaat</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">JK</th>
                        <th scope="col">TTL</th>
                        <th scope="col" >Status</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Status dalam Gereja</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Pekerjaan</th>

                        <th scope="col">Aksi</th>
                     
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $data)
                                <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td >{{ $data->daftar}}</td>
                                <td >{{ $data->kode_jem}}</td>
                                <td >{{ $data->namalengkap_jem}}</td>
                                <td >{{ $data->jk_jem}}</td>
                                <td >{{ $data->tempat}} , {{ $data->tanggal_jem}}</td>
                            
                                <td >{{ $data->status_jem}}</td>
                                <td >{{ $data->alamat_jem}},{{ $data->kelurahan_jem}},{{ $data->kecamatan_jem}},{{ $data->kota_jem}}, {{ $data->provinsi_jem}}</td>
                                <td >{{ $data->nohp_jem}}</td>
                            
                                <td >{{ $data->statusgereja}}</td>
                                <td >{{ $data->pendidikan}}</td>
                                <td >{{ $data->kerja}}</td>
                               
                                <td>
                                <a  href="/jemaat/edit/{{$data->id}}" class="fas fa-edit" data-toggle="tooltip" ></i></a> 
                                <a  href=""  class="fa fa-trash" aria-hidden="true" data-toggle="tooltip" ></i></a> 
                              </td>
                            </tr>   
                            @endforeach                             
 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/Admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/Admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/Admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/Admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/Admin/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
 
    $("#jemaat").DataTable();
  });
</script>
</body>
</html>

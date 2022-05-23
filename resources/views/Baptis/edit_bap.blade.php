<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Baptis</title>

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

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
          
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
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Kartu Keluarga
              
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Baptis</h1>
          </div>
       

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-7">
            <!-- jquery validation -->
            <div class="card card-primary">
            
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($data as $b)
              <form id="quickForm" method="post" action="/Baptis/update/{{$b->id}}">
              @csrf
            @method('PATCH')
           
                <div class="card-body">
                <div class="form-group">
                <label for="jemaat_id">Nama Lengkap</label>
                <select name="jemaat_id" id="jemaat_id" class="custom-select">
                    <option disabled>Pilih nama</option>
                    @foreach($jemaat as $j)
                    <option value="{{$j->id}}">{{$j->namalengkap_jem}}</option>
                    @endforeach
                </select>
            </div>
        <div class="form-group">
            <label>Tanggal Baptis</label>
            <input type="date" name="tglbap" class="form-control" id="tglbap"    value="{{ $b->tglbap}}"/>
        </div>
        
        <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari_bap" class="form-control" id="hari_bap"   value="{{ $b->hari_bap}}"/>
        </div>
        
        <div class="form-group">
            <label>Waktu</label>
            <input type="text" name="waktu_bap" class="form-control" id="waktu_bap"   value="{{ $b->waktu_bap}}"/>
        </div>


        
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @endforeach
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- bs-custom-file-input -->
<script src="{{asset('assets/Admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/Admin/dist/js/adminlte.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('assets/Admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>


</body>
</html>
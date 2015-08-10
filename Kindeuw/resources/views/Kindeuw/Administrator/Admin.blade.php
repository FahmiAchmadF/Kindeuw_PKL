<html>
<head>
	<title>Administrator</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ionicons.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-3.3.5-dist\css\bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/AdminLTE.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/_all-skins.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome-4.4.0/css/font-awesome.min.css') }}">
	

</head>
<body class="skin-blue sidebar-mini">


<div id="wrapper">

        <header class="main-header">
        
        <a href="{{ url('Admin/index') }}" class="logo suntiktopfixed">
          
          <span class="logo-mini"><b>K</b>IN</span>
          
          <span class="logo-lg"><b>Admin</b>Kindeuw</span>
        </a>
        
        <nav class="navbar navbar-static-top" role="navigation">
          
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              
              
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('image/admin/favicon.ico') }}" class="user-image" alt="User Image" />
                  <span class="hidden-xs">{{ $username }}</span>
                </a>
                <ul class="dropdown-menu">
                 
                  <li class="user-header">
                    <img src="{{ asset('image/admin/favicon.ico') }}" class="img-circle" alt="User Image" />
                    <p>
                      {{ $username }} - Admin Kindeuw Bookstore
                      <small>Member since sebelum masehi</small>
                    </p>
                  </li>
                 
                  
                
                  <li class="user-footer usfoot">
                    <div class="pull-right">
                      <a href="{{ url('Kindeuw/index/index/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar suntikfixed">

        <section class="sidebar">
          
          <div class="user-panel">
            
          </div>
          
          
          {!! Form::open(['url' => 'Admin/search/search/search', 'method' => 'post', 'value' => 'csrf_token()', 'class' => 'sidebar-form']) !!}
            
            <div class="input-group">
              {!! Form::text('cari1', null, ['class' => 'form-control', 'placeholder' => 'Cari Data Buku']) !!}
              <span class="input-group-btn">
                <button class="btn btn-flat" type="submit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li>
              <a href="{{ url('Admin/create') }}">
                <i class="fa fa-plus"></i> <span>Tambah Buku</span>
              </a>
            </li>
            
            <li>
              <a href="{{ url('Admin/index') }}">
                <i class="fa fa-th"></i> <span>Daftar Buku</span>
              </a>
            </li>
            <li>
              <a href="{{ url('Admin/list/transaksi') }}">
                <i class="fa fa-list-ol"></i> <span>Lihat Transaksi</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Opsi Select</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('Admin/tambah/genre') }}"><i class="fa fa-tags"></i> Genre</a></li>
                <li><a href="{{ url('Admin/tambah/bahasa/buku') }}"><i class="fa fa-language"></i> Bahasa</a></li>
                <li><a href="{{ url('Admin/tambah/kurir') }}"><i class="fa fa-truck"></i> Kurir</a></li>
                <li><a href="{{ url('Admin/tambah/kota') }}"><i class="fa fa-building"></i> Kota</a></li>
              </ul>
            </li>
            
          </ul>
        </section>
      
      </aside>
      <div class="content-wrapper">

        <section class="content-header">

        </section>

     
        <section class="content">
          @yield('kontensatu')
        </section>

      </div>


	
	
<script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>
	@yield('footer')	
</body>
</html>
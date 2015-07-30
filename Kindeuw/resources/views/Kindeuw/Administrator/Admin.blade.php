<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-3.3.5-dist\css\bootstrap.min.css') }}">

</head>
<body>
<div class="col-lg-2 col-xs-2 sidebar paddingnol">
	
	<div class="col-lg-10 col-xs-10 paddingnol">
            {!! Form::open(['url' => 'Admin/search/search/search', 'method' => 'post']) !!}
                {!! Form::text('cari1', null, ['class' => 'form-control bordernol', 'placeholder' => 'Cari Data Buku']) !!}
    </div><div class="col-lg-2 col-xs-2 paddingnol">        
                <button class="btn btn-default btn-block inicari bordernol" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                {!! Form::close() !!}
    </div>


	<div class="col-lg-12 col-xs-12 gambar"><center><img src="{{ asset('image/admin/favicon')}}.ico" class="img-rounded"></center></div>
	<div class="col-lg-12 col-xs-12 spasi"><h4>Hello!</h4><center><h1>{{ $username }}</h1></center></div>

	<div class="col-lg-12 col-xs-12">
		<hr>
	</div>

	<div class="col-lg-12 col-xs-12 paddingnol">
		<a href="{{ url('Admin/create') }}" class="btn btn-dark btn-lg btn-block bordernol2"><span class="glyphicon glyphicon-plus"></span> BUAT DATA BUKU</a>
	</div>
	<div class="col-lg-12 col-xs-12 paddingnol">
		<a href="{{ url('Kindeuw/excel/excel') }}" class="btn btn-dark btn-lg btn-block bordernol2"><span class="glyphicon glyphicon-save"></span> EXPORT TO EXCEL</a>
	</div>

	<div class="col-lg-12 col-xs-12">
		<hr>
	</div>
	
	<div class="col-lg-12 col-xs-12 paddingnol">
		<a href="{{ url('Kindeuw/index/index/logout') }}" class="btn btn-dark btn-lg btn-block out"><span class="glyphicon glyphicon-off"></span> KELUAR</a>
	</div>

	<div class="col-lg-2 col-xs-2 footer">
		<div class="col-lg-12 col-xs-12"><kindeuw>KinDeuw</kindeuw></div>
		<div class="col-lg-12 col-xs-12"><info>!NFO</info> <buku>BUKU</buku></div>
	</div>

</div>
<div class="col-lg-10 col-xs-10 paddingnol col-lg-offset-2 col-xs-offset-2">
	<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('Kindeuw') }}">KINDEUW INFO BUKU</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('Kindeuw') }}">Halaman Utama</a></li>
            <li><a href="{{ url('Kindeuw/About/About') }}">Tentang Kami</a></li>
            <li><a href="{{ url('Kindeuw/Contact/Contact') }}">Kontak</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>

	@yield('kontensatu')
	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Kindeuw Info Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-3.3.5-dist\css\bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css\footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css\main.css') }}">
    <script type="text/javascript" src="{{ asset('js\jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\bootstrap.min.js') }}"></script>
</head>
<body>
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
          <ul class="nav navbar-nav navbar-right">
            <li>{!! Form::open(['url' => 'Kindeuw/search/search/search', 'method' => 'post']) !!}
                {!! Form::text('cari1', null, ['class' => 'form-control', 'placeholder' => 'Cari Data Buku']) !!}</li>
            <li>
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                {!! Form::close() !!}</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
@yield('kontensatu')
</div>
<!-- <div class="fahmifooter">
  
</div>
 --></body>
</html>
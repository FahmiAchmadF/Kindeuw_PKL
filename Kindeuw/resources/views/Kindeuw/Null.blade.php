<!DOCTYPE html>
<html>
<head>
	<title>Kindeuw</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-3.3.5-dist\css\bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">
	
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
          <a class="navbar-brand" href="">KINDEUW INFO BUKU</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('Kindeuw/index/index') }}">Login</a></li>
            <li><a href="{{ url('Kindeuw/daftar/akun') }}">Daftar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
@yield('load')
</body>
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
</html>
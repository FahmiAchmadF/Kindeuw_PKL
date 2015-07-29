@extends('Kindeuw.App')
@section('kontensatu')
	<?php $uang=$show['Harga'];
			$format = number_format($uang, 0, '.', '.');
		?>
		
			<center>
				<img src="{{ asset('image')}}/{{ $show['id'] }}.png" class="img-rounded"/>
			</center><br>
			<table class="table">
			<tr><th>ID</th>
				<th><h1>{{ $show['id'] }}</h1></th>
			</tr>
			<tr><th>Judul</th>
				<th><h1>{{ $show['Judul'] }}</h1></th>
			</tr>
			<tr><th>Penerbit</th>
				<th><h1>{{ $show['Penerbit'] }}</h1></th>
			</tr>
			<tr><th>Harga</th>
				<th><h1>Rp.{{ $format }}</h1></th>
			</tr>
			<tr><th>Deskripsi</th>
				<th><h1>{{ $show['Deskripsi'] }}</h1></th>
			</tr>
		</table>
		<div class="col-sm-8">
			<a href="{{ url('Kindeuw/pdf/pdf',$show->id) }}" class="btn btn-default btn-block pdf"  target="_blank"><span class="glyphicon glyphicon-file"></span> PDF</a>
		</div>
    <div class="col-sm-4">
        <a href="{{ url('Kindeuw')  }}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
    </div>
@stop

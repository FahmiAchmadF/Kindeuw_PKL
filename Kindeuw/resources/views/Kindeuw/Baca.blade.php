@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-xs-12">
	<?php $uang=$show['Harga'];
			$format = number_format($uang, 0, '.', '.');
		?>
		
			<center>
				<img src="{{ asset('image')}}/{{ $show['id'] }}.png" class="img-rounded"/>
			</center><br>
		<div class="col-lg-12 col-xs-12">
			<table class="table">
			<tr><th>ID</th>
				<td><h3>{{ $show['id'] }}</h3></td>
			</tr>
			<tr><th>Judul</th>
				<td><h3>{{ $show['Judul'] }}</h3></td>
			</tr>
			<tr><th>Penerbit</th>
				<td><h3>{{ $show['Penerbit'] }}</h3></td>
			</tr>
			<tr><th>Harga</th>
				<td><h3>Rp.{{ $format }}</h3></td>
			</tr>
			<tr><th>Deskripsi</th>
				<td><h3>{{ $show['Deskripsi'] }}</h3></td>
			</tr>
			</table>
		</div>
		<div class="col-sm-8">
			<a href="{{ url('Kindeuw/pdf/pdf',$show->id) }}" class="btn btn-default btn-block pdf"  target="_blank"><span class="glyphicon glyphicon-file"></span> PDF</a>
		</div>
    <div class="col-sm-4">
        <a href="{{ url('Kindeuw') }}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
    </div>
</div>
@stop

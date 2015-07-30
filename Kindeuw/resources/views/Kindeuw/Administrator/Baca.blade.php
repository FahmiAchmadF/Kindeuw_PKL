@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')
<div class="col-lg-10 col-xs-10 col-lg-offset-2 col-xs-offset-2">
	<?php $uang=$show['Harga'];
			$format = number_format($uang, 0, '.', '.');
		?>
		<div class="col-lg-5 col-xs-5">
			<center>
				<img src="{{ asset('image')}}/{{ $show['id'] }}.png" class="img-rounded"/>
			</center>
		</div>
			<br>

			<table class="table col-lg-12 col-xs-12">
			<tr><th>ID</th>
				<th><h3>{{ $show['id'] }}</h3></th>
			</tr>
			<tr><th>Judul</th>
				<th><h3>{{ $show['Judul'] }}</h3></th>
			</tr>
			<tr><th>Penerbit</th>
				<th><h3>{{ $show['Penerbit'] }}</h3></th>
			</tr>
			<tr><th>Harga</th>
				<th><h3>Rp.{{ $format }}</h3></th>
			</tr>
			<tr><th>Deskripsi</th>
				<td><h3>{{ $show['Deskripsi'] }}</h3></td>
			</tr>
		</table>
		<div class="col-sm-8">
			<a href="{{ url('Kindeuw/pdf/pdf',$show->id) }}" class="btn btn-default btn-block pdf"  target="_blank"><span class="glyphicon glyphicon-file"></span> PDF</a>
		</div>
    <div class="col-sm-4">
        <a href="{{ url('Admin/index')  }}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
    </div>
</div>

@stop

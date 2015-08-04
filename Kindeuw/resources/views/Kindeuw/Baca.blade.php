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
			
			<p>ID : {{ $show['id'] }}</p>
				<p>Judul : {{ $show['Judul'] }}</p>
					<p>Penulis : {{ $show['Penulis'] }}</p>
						<p>Penerbit : {{ $show['Penerbit'] }}</p>
							
								<p>Deskripsi : {{ $show['Deskripsi'] }}</p>
								
								<p>Stok : {{ $show['stok'] }}</p>
								<p>Banyak Halaman : {{ $show['Banyak_halaman'] }}</p>
								<p>Harga : Rp.{{ $format }}</p>
								<div class="form-group">
								<p>Bahasa :</p>@foreach($Bahasa as $bahasa)
								<li>{{ $bahasa }}</li>
								@endforeach
								</div>
								<div class="form-group">
								<p>Genre :</p>@foreach($Genre as $genre)
								<li>{{ $genre }}</li>
								@endforeach
								</div>
			
		</div>
		<div class="col-sm-8">
			<a href="{{ url('Kindeuw/pdf/pdf',$show->id) }}" class="btn btn-default btn-block pdf"  target="_blank"><span class="glyphicon glyphicon-file"></span> PDF</a>
		</div>
    <div class="col-sm-4">
        <a href="{{ url('Kindeuw') }}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
    </div>
</div>
@stop

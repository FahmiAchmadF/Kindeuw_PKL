@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')
<div class="col-lg-10 col-xs-10 col-lg-offset-2 col-xs-offset-2">
	<?php $uang=$show['Harga'];
			$format = number_format($uang, 0, '.', '.');

			$stok = $show['stok'];
			$stokhabis = '';
			if ($stok=='0') {
				$stokhabis = 'Habis';
			}else{
				$stokhabis = $stok;
			}
		?>
		<div class="col-lg-5 col-xs-5">
			<center>
				<img src="{{ asset('image')}}/{{ $show['id'] }}.png" class="img-rounded"/>
			</center>
		</div>
			<br>

			<div class="col-lg-10 col-xs-10">
			<p>ID : {{ $show['id'] }}</p>
				<p>Judul : {{ $show['Judul'] }}</p>
					<p>Penulis : {{ $show['Penulis'] }}</p>
						<p>Penerbit : {{ $show['Penerbit'] }}</p>
							
								<p>Deskripsi : {{ $show['Deskripsi'] }}</p>
								
								<p>Stok : {{ $stokhabis }}</p>
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
        <a href="{{ url('Admin/index')  }}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
    </div>
</div>

@stop

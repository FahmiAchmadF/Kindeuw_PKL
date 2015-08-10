@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')

<div class="panel panel-default">
    <div class="panel-heading">
                        <strong> {{ $show->Judul }} </strong>
                    </div>
                    <div class="panel-body">
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
		<div class="row">
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
								</div>
	<div class="form-group">			
    <a href="{{ url('Admin/index')  }}" class="btn btn-flat"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
    </div>
    <div class="panel-footer ">
                        
    </div>

	
	
	</div>
@stop

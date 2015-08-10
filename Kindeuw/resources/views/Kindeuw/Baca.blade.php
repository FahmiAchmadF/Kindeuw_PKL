@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<?php $uang=$show['Harga'];
			$format = number_format($uang, 0, '.', '.');

			$stok = $show->stok;
			$stoktampil = '';
			if ($stok>0) {
				
				$stoktampil = 'Tersedia '; 
			}elseif ($stok==0) {
				$stoktampil = 'Habis ';
			}
		?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong> Detail Informasi Buku </strong>
			</div>
			<div class="panel-body">
				
			
			
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			<center>
				<img src="{{ asset('image')}}/{{ $show['id'] }}.png" class="img-rounded"/>
			</center><br>
			
				<p><b>Judul :</b>  {{ $show['Judul'] }}</p>
					<p><b>Penulis :</b>  {{ $show['Penulis'] }}</p>
						<p><b>Penerbit :</b>  {{ $show['Penerbit'] }}</p>
							
								<p><b>Deskripsi :</b> {{ $show['Deskripsi'] }}</p>
								
								<p><b>Stok :</b> {{ $stoktampil }}</p>
								<p><b>Banyak Halaman :</b> {{ $show['Banyak_halaman'] }}</p>
								<p><b>Harga :</b> Rp.{{ $format }}</p>
								<div class="form-group">
								<b>Bahasa :</b>@foreach($Bahasa as $bahasa)
								<li>{{ $bahasa }}</li>
								@endforeach
								</div>
								<div class="form-group">
								<b>Genre :</b>@foreach($Genre as $genre)
								<li>{{ $genre }}</li>
								@endforeach
								</div>
			
		</div>
		<div class="row">
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
        <a href="{{ url('Kindeuw') }}" class="btn btn-primary btn-block nonborderradius"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 rigth">
        <a href="{{ url('transaksi',$show->id) }}" class="btn btn-default btn-block nonborderradius beli">Beli</a>
    </div>
    </div>
</div>

</div>
</div>
@stop

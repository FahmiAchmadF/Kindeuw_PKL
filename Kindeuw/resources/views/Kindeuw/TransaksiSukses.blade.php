@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<center>
	<h2>Tolong Catat ID Dibawah Untuk Melihat Status Buku Yang Anda Pesan</h2>
	<p>ID TRANSAKSI ANDA : {{$myid}}</p>
	</center>
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	<a href="{{ url('transaksiku/caritransaksiku') }}" class="btn btn-default">Cari Data TransaksiKu</a>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 rigth">
	<a href="{{ url('Transaksi/pdf/pdf',$myid) }}" class="btn btn-default pdf rigth">Lihat PDF</a>	
	</div>
	</div>
</div>


@stop
@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-xs-12">
	<center><h1> BUKU SIAP UNTUK DI ANTAR</h1>
	<p>Tolong Catat ID Dibawah Untuk Melihat Status Buku Yang Anda Pesan</p>
	<p>ID TRANSAKSI ANDA : {{$myid}}</p>
	<h3>PERINGATAN !!</h3>
	<h4>JIKA DALAM 3x24 JAM UANG BELUM DI TRANSFER, MAKA PEMESANAN BUKU GAGAL</h4>
	<h2>TERIMA KASIH</h2>
	</center>

	<a href="{{ url('transaksiku/caritransaksiku') }}">Cari Data TransaksiKu</a>
</div>


@stop
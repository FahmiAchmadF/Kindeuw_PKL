@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-xs-12">
	
	<p>ID Transaksi : {{ $results->id }}</p>
	<p>Email Pemesan: {{ $results->email }}</p>
	<p>Nama Pemesan : {{ $results->nama }}</p>
	<p>Alamat Pemesan : {{ $results->alamat }}</p>
	<p>No Telepon : {{ $results->no_telp }}</p>
	<p>Status Pembayaran : {{ $results->status_transfer }}</p>
	<p>Status Penerimaan Pembayaran : {{ $results->status_admin_terima }}</p>
	<p>Status Penerimaan Barang : {{ $results->status_terima_barang }}</p>
	<p>Judul Buku : {{ $results->Judul }}</p>
	<p>Harga Buku : Rp. {{ $results->Harga }}</p>
	<p>Jumlah Pembelian Buku : {{ $results->jumlah_beli }}</p>
	<p>Total : Rp. {{ $results->Total }}</p>
	<p>Partner Kurir : $kurir</p>
</div>
@stop
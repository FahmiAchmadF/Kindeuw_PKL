@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')

<div class="col-lg-10 col-xs-10 col-lg-offset-2 col-xs-offset-2">
	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">ID Transaksi :</div>
	<div class="col-lg-8 col-xs-8"> {{ $resultsclear->id }}</div>
	</div>
	</div>
	
	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Email Pemesan :</div>
	<div class="col-lg-8 col-xs-8"> {{ $resultsclear->email }}</div>
	</div>
	</div>

	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Nama Pemesan :</div>
	<div class="col-lg-8 col-xs-8"> {{ $resultsclear->nama }}</div>
	</div>
	</div>
	
	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Alamat Pemesan :</div>
	<div class="col-lg-8 col-xs-8"> {{ $resultsclear->alamat }}</div>
	</div>
	</div>
	
	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">No Telepon :</div>
	<div class="col-lg-8 col-xs-8"> {{ $resultsclear->no_telp }}</div>
	</div>
	</div>
	
	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Status Pembayaran :</div>
	<div class="col-lg-8 col-xs-8"> {{ $status_transfer }}</div>
	</div>
	</div>
	
	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Status Penerimaan Pembayaran :</div>
	<div class="col-lg-8 col-xs-8"> {{ $status_admin_terima }}</div>
	</div>
	</div>

	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Status Penerimaan Barang :</div>
	<div class="col-lg-8 col-xs-8"> {{ $status_terima_barang }}</div>
	</div>
	</div>

	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Judul Buku :</div>
	<div class="col-lg-8 col-xs-8"> {{ $resultsclear->Judul }}</div>
	</div>
	</div>
	
	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Harga Buku :</div>
	<div class="col-lg-8 col-xs-8"> Rp. {{ $resultsclear->Harga }}</div>
	</div>
	</div>
	
	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Jumlah Pembelian Buku :</div>
	<div class="col-lg-8 col-xs-8"> {{ $resultsclear->jumlah_beli }}</div>
	</div>
	</div>

	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Total :</div>
	<div class="col-lg-8 col-xs-8"> Rp. {{ $resultsclear->Total }}</div>
	</div>
	</div>

	<div class="col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-lg-3 col-xs-3">Partner Kurir :</div>
	<div class="col-lg-8 col-xs-8"> {{ $kurir }}</div>
	</div>
	</div>


</div>

<script type="text/javascript" src=""></script>
@stop
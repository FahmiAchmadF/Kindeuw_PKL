@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
@if(Session::has('Konfirmasigagal'))
        <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-sign"></span> {{ Session::get('Konfirmasigagal') }}</div>
    @endif
	<div class="panel panel-default">
		<div class="panel-heading">Konfirmasi Pembayaran</div>
		<div class="panel-body">
		{!! Form::open(['url'=>['konfirmasi/proses'], 'method'=>'POST']) !!}
		{!! Form::hidden('id_transaksi', $id) !!}
		<div class="form-group">
		{!! Form::label('nama_pemilik_rekening', 'Nama Pemilik Rekening :') !!}
		{!! Form::text('nama_pemilik_rekening', null, ['class'=>'form-control', 'placeholder'=>'Nama Pemilik Rekening Yang Digunakan Untuk Transfer Pembayaran']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('nama_bank', 'Nama Bank :') !!}
		{!! Form::text('nama_bank', null, ['class'=>'form-control', 'placeholder'=>'Nama Bank Yang Digunakan Untuk Transfer']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('nomor_rekening', 'Nomor Rekening :') !!}
		{!! Form::text('nomor_rekening', null, ['class'=>'form-control', 'placeholder'=>'Nomor Rekening Yang Digunakan Untuk Transfer']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('transfer_ke_no', 'Transfer Ke Nomor Rekening :') !!}
		{!! Form::text('transfer_ke_no', null, ['class'=>'form-control', 'placeholder'=>'Nomor Rekening Tujuan Yang Anda Sudah Transfer']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('email', 'Email :') !!}
		{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email Yang Digunakan Saat Pembelian Buku']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Konfirmasi', ['class'=>'btn btn-success']) !!}
		</div>
		{!! Form::close() !!}
		</div>
		<div class="panel-footer">
			@if ($errors->any())
		<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<center><h1>Tolong Perikasa Inputan Anda !</h1></center>
			@foreach ($errors->all() as $error)
				<p><span class="glyphicon glyphicon-remove-sign"></span> {{ $error }}</p>
			@endforeach
		</div>
	@endif
		</div>
	</div>
</div>

@stop
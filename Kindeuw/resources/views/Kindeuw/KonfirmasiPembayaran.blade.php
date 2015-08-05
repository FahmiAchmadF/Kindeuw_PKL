@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-xs-12">
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

@stop
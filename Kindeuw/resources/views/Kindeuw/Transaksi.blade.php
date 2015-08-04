@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-xs-12">
	{!! Form::open(['url'=>'transaksi/proses', 'method'=>'POST']) !!}
<div class="form-group">
{!! Form::hidden('id_buku', $show->id) !!}
</div>

		<div class="form-group">
		{!! Form::label('email', 'Email :') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'Email Anda']) !!}
		</div>
			<div class="form-group">
			{!! Form::label('nama', 'Nama :') !!}
			{!! Form::text('nama', null, ['class' => 'form-control', 'placeholder'=>'Nama Lengkap']) !!}
			</div>
				<div class="form-group">
				{!! Form::label('alamat', 'Alamat Lengkap Dan Kota:') !!}
				{!! Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder'=>'Alamat Dan Kota Tujuan Pengiriman']) !!}
				</div>
					<div class="form-group">
					{!! Form::label('no_telp', 'Nomor Telepon :') !!}
					{!! Form::text('no_telp', null, ['class' => 'form-control', 'placeholder'=>'Nomor Telepon Anda']) !!}
					</div>
					<div class="form-group">
					{!! Form::label('Judul', 'Judul :') !!}
					{!! Form::text('Judul', $show->Judul, ['class' => 'form-control', 'readonly']) !!}
					</div>
				<div class="form-group">
				{!! Form::label('Harga', 'Harga :') !!}
				{!! Form::text('Harga', $show->Harga, ['class' => 'form-control', 'readonly']) !!}
				</div>
			<div class="form-group">
			{!! Form::label('jumlah_beli', 'Jumlah Beli :') !!}
			{!! Form::text('jumlah_beli', null, ['class' => 'form-control']) !!}
			</div>
		<div class="form-group">
		{!! Form::label('kurir', 'Kurir :') !!}
		{!! Form::select('kurir', $opsikurir, null, ['class' => 'form-control']) !!}
		</div>


			<div class="form-group">
			<div class="row">
			<div class="col-lg-8 col-xs-8">
				{!! Form::submit('Proses Transaksi Saya', ['class' => 'btn btn-success']) !!}
			</div>
			<div class="col-lg-4 col-xs-4">
				<a href="{{ url('Kindeuw') }}" class="btn btn-danger">Kembali</a>
			</div>
			</div>
			</div>
						
	{!! Form::close() !!}

	@if ($errors->any())
		<div class="alert alert-danger">
		<center><h1>Tolong Perikasa Inputan Anda !</h1></center>
			@foreach ($errors->all() as $error)
				<p><span class="glyphicon glyphicon-remove-sign"></span> {{ $error }}</p>
			@endforeach
		</div>
	@endif

</div>



@stop
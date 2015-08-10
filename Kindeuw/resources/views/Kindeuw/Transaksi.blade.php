@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-xs-12">
@if(Session::has('OverBuy'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove-sign"></span> {{ Session::get('OverBuy') }}</div>
@endif

<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Transaksi </strong>
					</div>
					<div class="panel-body">
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
				{!! Form::label('alamat', 'Alamat Lengkap') !!}
				{!! Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder'=>'Alamat Tujuan Pengiriman']) !!}
				</div>
					<div class="form-group">
					{!! Form::label('kota', 'Kota:') !!}
					{!! Form::select('kota', $opsikota1, null, ['class' => 'form-control']) !!}
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
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				{!! Form::submit('Proses Transaksi Saya', ['class' => 'btn btn-success nonborderradius']) !!}
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 rigth">
				<a href="{{ url('Kindeuw') }}" class="btn btn-danger nonborderradius rigth">Kembali</a>
			</div>
			</div>
			</div>
						
	{!! Form::close() !!}
	</div>
<div class="panel-footer ">
@if ($errors->any())
		<div class="alert alert-danger">
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
@extends('Kindeuw.Null')
@section('load')
<div class="container">
<div class="col-lg-12 col-xs-12">
	
	<div class="form-group">
			<a href="{{ url('Kindeuw/index/index') }}" class="btn btn-default">Kembali</a>
	</div>

	{!! Form::open(['url'=>'Kindeuw/daftar/akun/cek', 'method'=>'post']) !!}
	<div class="form-group">
			{!! Form::label('nama','Nama:') !!}
		<div class="input-group">
			<div class="input-group-addon">N</div>

			{!! Form::text('nama', null,['class'=>'form-control', 'placeholder'=>'Masukan Nama Anda']) !!}
		</div>
	</div>
		
	<div class="form-group">
			{!! Form::label('Username','Username:') !!}
		<div class="input-group">
			<div class="input-group-addon">U</div>

			{!! Form::text('username', null,['class'=>'form-control', 'placeholder'=>'Masukan Username Anda']) !!}
		</div>
	</div>

	<div class="form-group">
			{!! Form::label('email','Email:') !!}
		<div class="input-group">
				<div class="input-group-addon">@</div>
			
				{!! Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Masukan Email']) !!}	
		</div>
	</div>
		
	<div class="form-group">
		{!! Form::label('password','Kata Sandi:') !!}
		<div class="input-group">
			<div class="input-group-addon">*</div>
			
			{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Masukan Kata Sandi']) !!}	
		</div>
	</div>
		
	<div class="form-group">
		{!! Form::label('repassword','Kata Sandi Ulang:') !!}
		<div class="input-group">
			<div class="input-group-addon">*</div>
			
			{!! Form::password('repassword', ['class'=>'form-control', 'placeholder'=>'Ketik Ulang Kata Sandi..']) !!}	
		</div>
	</div>

	<div class="form-group">
			{!! Form::submit('Daftar', ['class'=>'btn btn-default', 'onclick'=>'cekpass()']) !!}
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
</div>
@stop
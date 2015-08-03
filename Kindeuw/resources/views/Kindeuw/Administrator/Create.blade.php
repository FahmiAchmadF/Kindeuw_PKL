@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')
 
    <div class="col-lg-10 col-xs-10 col-lg-offset-2 col-xs-offset-2">

		{!! Form::open(['url' => 'Admin/index', 'novalidate' => 'novalidate', 'files' => 'true']) !!}
		<div class="form-group">
			{!! Form::label('id', 'ID:') !!}
			{!! Form::text('id', null, ['class' => 'form-control', 'placeholder'=>'Automatis', 'disabled']) !!}
		</div>
				<div class="form-group">
				{!! Form::label('stok', 'Stok:') !!}
				{!! Form::text('stok', null, ['class' => 'form-control', 'placeholder'=>'Stok Buku']) !!}
				</div>
						<div class="form-group">
						{!! Form::label('Judul', 'Judul:') !!}
						{!! Form::text('Judul', null, ['class' => 'form-control', 'placeholder'=>'Judul Buku']) !!}
						</div>
								<div class="form-group">
								{!! Form::label('Penulis', 'Penulis:') !!}
								{!! Form::text('Penulis', null, ['class' => 'form-control', 'placeholder'=>'Penulis']) !!}
								</div>
										<div class="form-group">
										{!! Form::label('Penerbit', 'Penerbit:') !!}
										{!! Form::text('Penerbit', null, ['class' => 'form-control', 'placeholder'=>'Penerbit']) !!}
										</div>
								<div class="form-group">
								{!! Form::label('Deskripsi', 'Deskripsi:') !!}
								{!! Form::textarea('Deskripsi', null, ['class' => 'form-control', 'placeholder'=>'Deskripsi Buku...']) !!}
								</div>
						<div class="form-group">
						{!! Form::label('Banyak_halaman', 'Banyak Halaman:') !!}
						{!! Form::text('Banyak_halaman', null, ['class' => 'form-control', 'placeholder'=>'Jumlah Halaman']) !!}
						</div>
				<div class="form-group">
				{!! Form::label('Bahasa', 'Bahasa:') !!}
				{!! Form::select('Bahasa', $opsibahasa, 1, ['class'=>'form-control']) !!}
				</div>
		<div class="form-group">
		{!! Form::label('Genre', 'Genre:') !!}
		{!! Form::select('Genre', $opsigenre, 1, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('Harga', 'Harga:') !!}
		<div class="input-group">
		<span class="input-group-addon">Rp.</span>
		{!! Form::text('Harga', null, ['class' => 'form-control', 'placeholder'=>'Harga']) !!}
		</div>					
		</div>
		<div class="form-group">
		{!! Form::label('image', 'Gambar:') !!}
		{!! Form::file('image', null, ['class' => 'form-control']) !!}
		</div>
					<div class="row">
                    <div class="col-md-8">
					{!! Form::submit('Simpan', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                    <div class="col-md-4">
                    <a href="{{ url('Admin/index')}}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
                    </div>
                    </div><br>
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
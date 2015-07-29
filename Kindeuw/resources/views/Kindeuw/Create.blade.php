@extends('Kindeuw.App')
@section('kontensatu')
    <div class="container">

		{!! Form::open(['url' => 'Kindeuw', 'novalidate' => 'novalidate', 'files' => 'true']) !!}
		<div class="form-group">
			{!! Form::label('id', 'ID:') !!}
			{!! Form::text('id', null, ['class' => 'form-control', 'placeholder'=>'Automatis', 'disabled']) !!}
			
		</div>
			<div class="form-group">
			{!! Form::label('Judul', 'Judul:') !!}
			{!! Form::text('Judul', null, ['class' => 'form-control', 'placeholder'=>'Judul Buku']) !!}
			</div>
				<div class="form-group">
				{!! Form::label('Penerbit', 'Penerbit:') !!}
				{!! Form::text('Penerbit', null, ['class' => 'form-control', 'placeholder'=>'Penerbit']) !!}
				</div>
						<div class="form-group">
						{!! Form::label('Harga', 'Harga:') !!}
							<div class="input-group">
							<span class="input-group-addon">Rp.</span>
							{!! Form::text('Harga', null, ['class' => 'form-control', 'placeholder'=>'Harga']) !!}
							</div>
							<div class="form-group">
							{!! Form::label('Deskripsi', 'Deskripsi:') !!}
							{!! Form::textarea('Deskripsi', null, ['class' => 'form-control', 'placeholder'=>'Deskripsi Buku...']) !!}
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
                    <a href="{{ url('/Kindeuw')}}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>

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
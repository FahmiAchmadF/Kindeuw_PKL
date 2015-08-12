@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')

	@if(Session::has('succes'))
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-success"></span> {{ Session::get('succes') }}</div>
    @endif
		<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Tambah Opsi Genre </strong>
					</div>
					<div class="panel-body">
						{!! Form::open(['url'=>['genre/ubah/genre',$opsi], 'method'=>'PUT']) !!}
							<fieldset>
								<div class="row">
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
										{!! Form::label('opsi_genre') !!}
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-thumbs-up"></i>
												</span> 
												
												{!! Form::text('opsi_genre', $opsi->opsi_genre, ['class'=>'form-control']) !!}
											</div>
										</div>
										<div class="form-group">
												<div class="row">

														<div class="col-lg-1 col-lg-offset-1 col-xs-1 col-xs-offset-1">
														{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
														</div>
												</div>
										</div>
									</div>
								</div>
							</fieldset>
						{!! Form::close() !!}
					</div>
					<div class="panel-footer ">
						
					</div>
                </div>
                @if ($errors->any())
		<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<center><h1>Tolong Perikasa Inputan Anda !</h1></center>
			@foreach ($errors->all() as $error)
				<p><span class="glyphicon glyphicon-remove-sign"></span> {{ $error }}</p>
			@endforeach
		</div>
	@endif

@stop
@extends('Kindeuw.Null')
@section('load')

    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Silahkan Login Admin </strong>
					</div>
					<div class="panel-body">
						{!! Form::open(['url'=>'Kindeuw/index/index', 'method'=>'POST']) !!}
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												{!! Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
											</div>
										</div>
										<div class="form-group">
												<div class="row">
														<div class="col-lg-3 col-xs-3">
														{!! Form::submit('Login', ['class' => 'btn btn-succes btn-login-submit']) !!}
														</div>

														<div class="col-lg-1 col-lg-offset-1 col-xs-1 col-xs-offset-1">
														<a href="Kindeuw" class="btn btn-primary">Lanjut Sebagai Tamu</a>	
														</div>
												</div>
										</div>
									</div>
								</div>
							</fieldset>
						{!! Form::close() !!}
					</div>
					<div class="panel-footer ">
						Tambah Akun Admin <a href="{{ url('Kindeuw/daftar/akun')}}" onClick=""> Daftar </a>
					</div>
                </div>
			</div>
		</div>
	</div>


@stop
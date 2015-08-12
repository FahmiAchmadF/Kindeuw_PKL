@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')

	@if(Session::has('succes'))
        <div class="alert alert-success alert-dissmissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-success"></span> {{ Session::get('succes') }}</div>
    @endif
		<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Tambah Opsi Kota </strong>
					</div>
					<div class="panel-body">
						{!! Form::open(['url'=>'Admin/tambah/kota/simpan', 'method'=>'POST']) !!}
							<fieldset>
								<div class="row">
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
										{!! Form::label('opsi_kota') !!}
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-thumbs-up"></i>
												</span> 
												
												{!! Form::text('opsi_kota',null, ['class'=>'form-control', 'placeholder'=>'Kota']) !!}
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

	@if(Session::has('hapus_data'))
        <div class="alert alert-success alert-dismissible" role="alert">
        <span class="glyphicon glyphicon-success"></span> {{ Session::get('hapus_data') }}</div>
    @endif

	<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Daftar Kota </strong>
					</div>
					<div class="panel-body">
			<div class="table-responsive">		
			<table class="table table-striped table-bordered table-hover">
			<tr>
                <th>No.</th>
				<th>ID</th>
				<th>Kota</th>
				<th colspan="2">Aksi</th>
			</tr>
            <?php $i=1; ?>
            @foreach($ngelists as $list)
                    
                    <tr>
                        <td>
                           <?php echo $i; ?>

                        </td>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->opsi_kota }}</td>
                        <td><center><a href="{{ url('kota/ubah',$list->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-book"></span> Ubah</a></center></td>
                        <td><center>{!! Form::open(['url' => ['kota/hapus/kota',$list->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
                            {!! Form::close() !!}</center></td>
                    </tr>
                <?php $i++; ?>
                @endforeach

		</table>
		</div>
		<div class="form-group">
           <center> {!! str_replace('/?', '?', $ngelists->render()) !!}</center>
        </div>
					</div>
					<div class="panel-footer ">
						<strong>Jumlah Kota : <span style="color:green">{{ $count }}</span></strong>
					</div>
@stop
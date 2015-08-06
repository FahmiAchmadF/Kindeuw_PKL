@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')
	<div class="col-lg-10 col-xs-10 col-lg-offset-2 col-xs-offset-2">
	@if(Session::has('succes'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-success"></span> {{ Session::get('succes') }}</div>
    @endif
		<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Tambah Opsi Kurir </strong>
					</div>
					<div class="panel-body">
						{!! Form::open(['url'=>'Admin/tambah/kurir/simpan', 'method'=>'POST']) !!}
							<fieldset>
								<div class="row">
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
										{!! Form::label('opsi_kurir') !!}
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-thumbs-up"></i>
												</span> 
												
												{!! Form::text('opsi_kurir',null, ['class'=>'form-control', 'placeholder'=>'Kurir']) !!}
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
		<div class="alert alert-danger">
		<center><h1>Tolong Perikasa Inputan Anda !</h1></center>
			@foreach ($errors->all() as $error)
				<p><span class="glyphicon glyphicon-remove-sign"></span> {{ $error }}</p>
			@endforeach
		</div>
	@endif

	@if(Session::has('hapus_data'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-success"></span> {{ Session::get('hapus_data') }}</div>
    @endif
	<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Daftar Kurir </strong>
					</div>
					<div class="panel-body">
			<table class="table table-striped table-bordered table-hover">
			<tr>
                <th>No.</th>
				<th>ID</th>
				<th>Kurir</th>
				<th colspan="2">Aksi</th>
			</tr>
            <?php $i=1; ?>
            @foreach($ngelists as $list)
                    
                    <tr>
                        <td>
                           <?php echo $i; ?>

                        </td>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->opsi_kurir }}</td>
                        <td><center><a href="{{ url('kurir/ubah',$list->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-book"></span> Ubah</a></center></td>
                        <td><center>{!! Form::open(['url' => ['kurir/hapus/kurir',$list->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
                            {!! Form::close() !!}</center></td>
                    </tr>
                <?php $i++; ?>
                @endforeach

		</table>

		<div class="form-group">
           <center> {!! str_replace('/?', '?', $ngelists->render()) !!}</center>
        </div>
					</div>
					<div class="panel-footer ">
						
					</div>
                
	</div>
	</div>
@stop
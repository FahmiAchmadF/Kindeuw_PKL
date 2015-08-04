@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-xs-12">
	
            {!! Form::open(['url' => 'transaksiku', 'method' => 'post']) !!}
                {!! Form::text('idtransaksi', null, ['class' => 'form-control', 'placeholder' => 'Masukan ID Transaksi']) !!}
            	<div class="row">
            		<div class="col-lg-8">
            			<a href="Kindeuw" class="btn btn-primary">Kembali</a>
            		</div>
            		<div class="col-lg-4 col-xs-4">
					<button class="btn btn-default" type="submit">Cari TransaksiKU  <span class="glyphicon glyphicon-search"></span></button>
            		</div>
            	</div>
                {!! Form::close() !!}
</div>

@stop
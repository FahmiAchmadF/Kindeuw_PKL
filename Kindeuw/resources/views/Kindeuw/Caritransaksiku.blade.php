@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-xs-12">
	       <div class="form-group">
            {!! Form::open(['url' => 'transaksiku', 'method' => 'post']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="input-group">
                {!! Form::text('idtransaksi', null, ['class' => 'form-control', 'placeholder' => 'Masukan ID Transaksi']) !!}
                <div class="input-group-btn">
					<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </div>
            </div>		
                {!! Form::close() !!}
                </div>
                <a href="Kindeuw" class="btn btn-primary">Kembali</a>
</div>

@stop
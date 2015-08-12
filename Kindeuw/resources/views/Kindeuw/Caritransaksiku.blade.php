@extends('Kindeuw.App')
@section('kontensatu')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
@if(Session::has('Transaksikugagal'))
    <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <span class="glyphicon glyphicon-remove-sign"></span> {{ Session::get('Transaksikugagal') }}</div>
@endif
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
</div>

@stop
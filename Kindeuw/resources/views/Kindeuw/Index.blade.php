@extends('Kindeuw.App')
@section('kontensatu')

<div class="container">
    @if(Session::has('flash_message'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {{ Session::get('flash_message') }}</div>
    @endif

    @if(Session::has('ubah_data'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {{ Session::get('ubah_data') }}</div>
    @endif

    @if(Session::has('hapus_data'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {{ Session::get('hapus_data') }}</div>
    @endif

    @if(Session::has('Konfirmasi'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {{ Session::get('Konfirmasi') }}</div>
    @endif

    @if(Session::has('Konfirmasi Terima Barang'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {{ Session::get('Konfirmasi Terima Barang') }}</div>
    @endif

                {!! Form::open(['url' => 'Kindeuw/search/search/search', 'method' => 'post']) !!}
                <div class="form-group">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <div class="input-group">
                {!! Form::text('cari1', null, ['class' => 'form-control', 'placeholder' => 'Cari Data Buku']) !!}
                <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </div>
                </div>
                {!! Form::close() !!}
                </div>


        <div></div>
        <div class="row">
        @foreach($manekinds as $manekin)
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php $uang=$manekin['Harga'];
                    $format = number_format($uang, 0, '.', '.');
                    ?>
                    
            <div class="maincontainer">
            <div class="panel panel-default">
            <div class="panel-body">
            
        <center> <img src="{{ url('image') }}/{{ $manekin->id }}.png"> </center>

        <div class="form-group"><center><h5>{{ $manekin->Judul }}</h5></center>
        <center><h4>Rp.{{ $format }}</h4></center></div>
        <a href="{{ url('Kindeuw',$manekin->id) }}" class="btn btn-default detail nonborderradius">Detail</a>
        <a href="{{ url('transaksi',$manekin->id) }}" class="btn btn-default beli rigth nonborderradius">Beli</a>
        
        </div>
        </div>
        </div>
        </div>
        @endforeach
        </div>
        
        

    <div class="container-fluid coeg2">
        <div class="form-group">
           <center> {!! str_replace('/?', '?', $manekinds->render()) !!}</center>
        </div>
    </div>
      </div>
@stop

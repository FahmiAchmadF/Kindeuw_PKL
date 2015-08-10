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
		<!-- <table class="table table-striped table-bordered table-hover">
			<tr>
                <th>No.</th>
				<th>Judul</th>
				<th>Penerbit</th>
				<th>Harga</th>
				<th colspan="2">Aksi</th>
			</tr>
            <?php $i=1; ?>
            @foreach($manekinds as $manekin)
                    <?php $uang=$manekin['Harga'];
                    $format = number_format($uang, 0, '.', '.');
                    ?>
                    <tr>
                        <td>
                           <?php echo $i; ?>

                        </td>
                        <td>{{ $manekin->Judul }}</td>
                        <td>{{ $manekin->Penerbit }}</td>
                        <td>Rp.{{ $format }}</td>
                        <td><center><a href="{{ url('Kindeuw',$manekin->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-book"></span> BACA</a></center></td>
                        <td><center><a href="{{ url('transaksi',$manekin->id) }}" class="btn btn-success">Beli</center></td>
                    </tr>
                <?php $i++; ?>
                @endforeach

		</table> -->
        

<?php $uang=$manekin['Harga'];
                    $format = number_format($uang, 0, '.', '.');
                    ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @foreach($manekinds as $manekin)
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        
                    
            <div class="maincontainer">
            <div class="panel panel-default">
            <div class="panel-body">
        <center> <img src="{{ url('image') }}/{{ $manekin->id }}.png"> </center>
        <div class="form-group"><center><p>{{ $manekin->Judul }}</p></center>
        <h4>Rp.{{ $format }}</h4></div>
        <a href="{{ url('Kindeuw',$manekin->id) }}" class="btn btn-default detail">Detail</a>
        <a href="{{ url('transaksi',$manekin->id) }}" class="btn btn-default beli rigth">Beli</a>
        </div>
        </div>
        </div>
        </div>
        @endforeach
        <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><center> iklan 2 </center></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><center> iklan 3 </center></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><center> iklan 4 </center></div>
        </div> -->
        <!-- <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><center> iklan 5 </center></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><center> iklan 6 </center></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><center> iklan 7 </center></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><center> iklan 8 </center></div>
        </div> -->
        </div>

    <div class="container-fluid coeg2">
        <div class="form-group">
           <center> {!! str_replace('/?', '?', $manekinds->render()) !!}</center>
        </div>
    </div>
      </div>
@stop

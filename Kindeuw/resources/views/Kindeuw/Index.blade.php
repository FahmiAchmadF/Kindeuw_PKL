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
		<table class="table table-striped table-bordered table-hover">
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

		</table>
        
    <div class="container-fluid coeg2">
        <div class="form-group">
           <center> {!! str_replace('/?', '?', $manekinds->render()) !!}</center>
        </div>
    </div>
      </div>
@stop

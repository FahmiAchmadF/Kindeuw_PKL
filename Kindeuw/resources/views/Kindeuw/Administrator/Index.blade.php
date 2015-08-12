@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')

    @if(Session::has('flash_message'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {{ Session::get('flash_message') }}</div>
    @endif

    @if(Session::has('ubah_data'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {{ Session::get('ubah_data') }}</div>
    @endif

    @if(Session::has('hapus_data'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {{ Session::get('hapus_data') }}</div>
    @endif
    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
    <div class="panel panel-default">
    <div class="panel-heading">
                        <strong> Daftar Buku </strong>
                    </div>
                    <div class="panel-body">
    <div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<tr>
                <th>No.</th>
				<th>ID</th>
				<th>Judul</th>
				<th>Penerbit</th>
				<th>Harga</th>
                <th>Stok</th>
				<th colspan="3"><center>Aksi</center></th>
			</tr>
            <?php $i=1; ?>
            @foreach($manekinds as $manekin)
                    <?php $uang=$manekin['Harga'];
                    $format = number_format($uang, 0, '.', '.');
                    $stok = $manekin['stok'];
            $stokhabis = '';
            if ($stok=='0') {
                $stokhabis = 'Habis';
            }else{
                $stokhabis = $stok;
            }
                    ?>
                    <tr>
                        <td>
                           <?php echo $i; ?>

                        </td>
                        <td>{{ $manekin->id }}</td>
                        <td>{{ $manekin->Judul }}</td>
                        <td>{{ $manekin->Penerbit }}</td>
                        <td>Rp.{{ $format }}</td>
                        <td>{{ $stokhabis }}</td>
                        <td><center><a href="{{ url('Admin/ubah',$manekin->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> UBAH</a></center></td>
                        <td><center><a href="{{ url('Admin',$manekin->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-book"></span> BACA</a></center></td>
                        <td><center>{!! Form::open(['url' => ['Admin/hapus',$manekin->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> HAPUS</button>
                            {!! Form::close() !!}</center></td>
                    </tr>
                <?php $i++; ?>
                @endforeach

		</table>
        </div>
    
        <div class="form-group">
           <center> {!! str_replace('/?', '?', $manekinds->render()) !!}</center>
        </div>
    
</div>
<div class="panel-footer ">
                        <strong>Jumlah Buku : <span style="color:red">{{ $count }}</span></strong>
                    </div>
</div>                    
</div>
@stop

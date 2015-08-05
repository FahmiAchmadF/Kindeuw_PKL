@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')

<div class="col-lg-10 col-xs-10 col-lg-offset-2 col-xs-offset-2">
	<table class="table table-striped table-bordered table-hover">
			<tr>
                <th>No.</th>
				<th>ID Transaksi</th>
				<th>Nama</th>
				<th>Status Transfer</th>
				<th>Status Admin Terima</th>
				<th>Status Terima Barang</th>
				<th colspan="3"><center>Aksi</center></th>
			</tr>
            <?php $i=1; ?>
            @foreach($listtransaksi as $list)
                    
                    <tr>
                        <td>
                           <?php echo $i; ?>

                        </td>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->nama }}</td>
                        <td>{{ $list->status_transfer }}</td>
                        <td>{{ $list->status_admin_terima }}</td>
                        <td>{{ $list->status_terima_barang }}</td>
                        <td><center><a href="{{ url('Admin/transaksi/terima/transfer',$list->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Terima Transfer</a></center></td>
                        <td><center><a href="{{ url('Admin',$list->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-book"></span> Detail</a></center></td>
                        <td><center>{!! Form::open(['url' => ['Admin/hapus',$list->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> HAPUS</button>
                            {!! Form::close() !!}</center></td>
                    </tr>
                <?php $i++; ?>
                @endforeach

		</table>

</div>

@stop
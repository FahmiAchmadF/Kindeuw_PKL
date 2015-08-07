@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')


@if(Session::has('hapus_data'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {{ Session::get('hapus_data') }}</div>
    @endif
    <div class="panel panel-default">
    <div class="panel-heading">
                        <strong> List Transaksi </strong>
                    </div>
                    <div class="panel-body">
    <div class="table-responsive">
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
                    <?php $statustransfer=$list->status_transfer; 
                    	$statusadminterima=$list->status_admin_terima;
                    	$statusterimabarang=$list->status_terima_barang;
                    		$transfer='';
                    		$adminterima='';
                    		$terima='';
                    		?>
                    @if($statustransfer=='1')
                    <?php $transfer='Sudah Membayar'; ?>
                    @else
                    <?php $transfer='Belum Membayar'; ?>
                    @endif

                    @if($statusadminterima=='1')
					<?php $adminterima='Sudah Diterima'; ?>
					@else
					<?php $adminterima='Belum Diterima'; ?>
                    @endif

                    @if($statusterimabarang)
					<?php $terima='Barang Sudah Diterima'; ?>
					@else
					<?php $terima='Barang Belum Diterima'; ?>
                    @endif
                    <tr>
                        <td>
                           <?php echo $i; ?>

                        </td>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->nama }}</td>
                        <td><?php echo $transfer;?></td>
                        <td><?php echo $adminterima;?></td>
                        <td><?php echo $terima;?></td>
                        <td><center><a href="{{ url('Admin/transaksi/terima/transfer',$list->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Terima Transfer</a></center></td>
                        <td><center><a href="{{ url('Admin/transaksiuser',$list->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-book"></span> Detail</a></center></td>
                        <td><center>{!! Form::open(['url' => ['Admin/transaksi/hapus',$list->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> HAPUS</button>
                            {!! Form::close() !!}</center></td>
                    </tr>
                <?php $i++; ?>
                @endforeach

		</table>
        </div>
        </div>
        <div class="form-group">
           <center> {!! str_replace('/?', '?', $listtransaksi->render()) !!}</center>
        </div>
        <div class="panel-footer ">
                        
                    </div>
        
        </div>


@stop
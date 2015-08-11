@extends('Kindeuw.App')
@section('kontensatu')
<?php $uang=$resultsclear->Harga;
$format = number_format($uang, 0, '.', '.');
$total=$resultsclear->Total;
$format1 = number_format($total, 0, '.', '.');
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Informasi Pembelian</strong>
	</div>
	<div class="panel-body">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-10.col-xs-offset-1">
	
		<div class="table-responsive">
		<table class="table table-default">
	

	<tr>
	<th>
		ID Transaksi
	</th>
	 <th>:</th>
	 <td>
	{{ $resultsclear->id }}
	</td>
	</tr>
	
	<tr>
	<th>
		Email Pembeli 
	</th>
	<th>:</th>
	<td>
	{{ $resultsclear->email }}
	</td>
	</tr>

	<tr>
	<th>
		Nama Pembeli 
	</th>
	<th>:</th>
	<td>
	{{ $resultsclear->nama }}
	</td>
	</tr>
	
	<tr>
	<th>
		Alamat 
	</th>
	<th>:</th>
	<td>
	{{ $resultsclear->alamat }}
	</td>
	</tr>
	
	<tr>
	<th>
		No Telepon 
	</th>
	<th>:</th>
	<td>
	{{ $resultsclear->no_telp }}
	</td>
	</tr>
	
	<tr>
	<th>
		Status Pembayaran 
	</th>
	<th>:</th>
	<td>
	{{ $status_transfer }}
	</td>
	</tr>
	
	<tr>
	<th>
		Status Penerimaan Pembayaran    
	</th>
	<th>:</th>
	<td>
	{{ $status_admin_terima }}
	</td>
	</tr>

	<tr>
	<th>
		Status Penerimaan Barang 
	</th>
	<th>:</th>
	<td>
	{{ $status_terima_barang }}
	</td>
	</tr>

	<tr>
	<th>
		Judul Buku 
	</th>
	<th>:</th>
	<td>
	{{ $resultsclear->Judul }}
	</td>
	</tr>
	
	<tr>
	<th>
		Harga Buku 
	</th>
	<th>:</th>
	<td>
	Rp. {{ $format }}
	</td>
	</tr>
	
	<tr>
	<th>
		Jumlah Pembelian 
	</th>
	<th>:</th>
	<td>
	{{ $resultsclear->jumlah_beli }}
	</td>
	</tr>

	<tr>
	<th>
		Total 
	</th>
	<th>:</th>
	<td>
	Rp. {{ $format1 }}
	</td>
	</tr>

	<tr>
	<th>
		Kurir 
	</th>
	<th>:</th>
	<td>
	{{ $kurir }}
	</td>
	</tr>

</table>
</div>

</div>






</div>

<div class="panel-footer">
	<p style="color:red;"> Tanggal Pembelian:{{ $resultsclear->created_at }}</p>
</div>

</div>

<div class="panel panel-default">
	<div class="panel-heading"><strong> Aksi Pembeli </strong></div>
	<div class="panel-body">
	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
		<a href="{{ url('konfirmasi/pembayaran',$resultsclear->id) }}" class="btn btn-success nonborderradius btn-block">Bayar</a>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
		<a href="{{ url('konfirmasi/penerimaanbarang',$resultsclear->id) }}" class="btn btn-info nonborderradius btn-block">Konfirmasi Barang Diterima</a>
	</div>
	</div>
</div>

<script type="text/javascript" src=""></script>
@stop
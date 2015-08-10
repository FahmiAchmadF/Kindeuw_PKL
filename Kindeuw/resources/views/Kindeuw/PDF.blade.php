
<html>
<title>Transaksi {{ $id }}</title>
<head>
<meta http-equiv="Content-Type" content="charset=utf-8" />
<meta charset="UTF-8">
	
	<style>
		body{
			font-family: sans-serif;
			background-color: #ecf0f1;
		}
		img{
			background-color: #ecf0f1;
			width: 350px;
			height: 250px;
		}
		h1{
			color: #3498db;
		}
	</style>
</head>
<body>
<?php $uang=$Harga;
$format = number_format($uang, 0, '.', '.');
$total=$Total;
$format1 = number_format($total, 0, '.', '.');
?>
<center>	
	<h1>Kindeuw Info Buku</h1>
				<img src="{{ asset('image')}}/{{ $id_buku }}.png"/>
			</center><br>
			<p><b>ID Transaksi :</b> {{ $id }}</p>
			<p><b>Email Pembeli : </b>{{ $email }}</p>
			<p><b>Nama Pembeli :</b>{{ $nama }}</p>
			<p><b>Alamat :</b>{{ $alamat }}</p>
			<p><b>Kota :</b>{{ $kota }}</p>
			<p><b>No Telepon :</b>{{ $no_telp }}</p>
			<p><b>Judul :</b>{{ $Judul }}</p>
			<p><b>Harga :</b>Rp. {{ $format }}</p>
			<p><b>Jumlah Beli :</b>{{ $jumlah_beli }}</p>
			<p><b>Total :</b> Rp. {{ $format1 }}</p>
			<p><b>Tanggal Pembelian :</b> {{ $created_at }}</p>
</body>
</html>
			

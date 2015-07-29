
<html>
<head>
<meta http-equiv="Content-Type" content="charset=utf-8" />
<meta charset="UTF-8">
	<title>{{ $id }}</title>
	<style>
		body{
			font-family: sans-serif;
			background-color: #ecf0f1;
		}
		table{
			border-bottom: 
		}
		table tr th{
			text-align: left;
			color: #3498db;
		}
		table tr td{
			text-align: right;
		}
		img{
			background-color: #ecf0f1;
		}
		h1{
			color: #3498db;
		}
	</style>
</head>
<body>
<?php $uang=$Harga;
$format = number_format($uang, 0, '.', '.');
?>
<center>	
	<h1>Kindeuw Info Buku</h1>
				<img src="{{ asset('image')}}/{{ $id }}.png"/>
			</center><br>
			<table>
			<tr><th>ID :</th>
				<td><h3>{{ $id }}</h3></td>
			</tr>
			<tr><th>Judul :</th>
				<td><h3>{{ $Judul }}</h3></td>
			</tr>
			<tr><th>Penerbit :</th>
				<td><h3>{{ $Penerbit }}</h3></td>
			</tr>
			<tr><th>Harga :</th>
				<td><h3>Rp.{{ $format }}</h3></td>
			</tr>
		</table>

		<table>
			<tr><th>Deskripsi </th>
				<td><h3>{{ $Deskripsi }}</h3></td>
			</tr>
		</table>
</body>
</html>
			

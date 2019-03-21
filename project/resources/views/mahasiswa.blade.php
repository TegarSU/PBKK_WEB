<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		
		<tr>
			<th>
				NRP
			</th>
			<th>
				NAMA
			</th>
			<th>
				ALAMAT
			</th>
		</tr>
		@foreach ($data as $mhs)
			<tr>
				<td>{{$mhs->nrp}}</td>
				<td>{{$mhs->nama}}</td>
				<td>{{$mhs->alamat}}</td>
				
			</tr>
		@endforeach
	</table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>ABOUT</title>
</head>
<body>

	@foreach($ortu as $data)<hr>
	Nama Ibu    : {{ $data->nama_ibu }}<br>
	Nama Ayah   : {{ $data->nama_ayah }}<br>
	Umur Ibu    : {{ $data->umur_ibu }}<br>
	Umur Ayah   : {{ $data->umur_ayah }}<br></hr>
	Nama Anak	     :
	@foreach($data->anak as $key)
	<li>{{ $key->nama}}</li>
	@endforeach
	<hr>
	@endforeach





</body>
</html>
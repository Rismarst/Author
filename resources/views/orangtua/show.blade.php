@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Orangtua
	<div class="panel-title pull-right">
	<a href="{{URL('previous')}}">Kembali</a></div>
</div>

<div class="panel-body">
	<form action="{{route('ortu.update',$ortu->id)}}" method="post">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-lable">Nama Ayah</label>
				<input type="text" name="a" readonly="" class="form-control" required="" value="{{$ortu->nama_ayah}}"></div>

		<div class="form-group">
			<label class="control-lable">Nama Ibu</label>
				<input type="text" readonly="" name="b" required="" class="form-control" value="{{$ortu->nama_ibu}}"></div>

		<div class="form-group">
			<label class="control-lable">Umur Ayah</label>
				<input type="number" name="c" readonly="" class="form-control" required="" value="{{$ortu->umur_ayah}}"></div>

		<div class="form-group">
			<label class="control-lable">Umur Ibu</label>
				<input type="number" name="d" readonly="" class="form-control" required="" value="{{$ortu->umur_ibu}}"></div>

		<div class="form-group">
			<label class="control-lable">Alamat</label>
				<textarea name="e" class="form-control" readonly=""  rows="10" required="">{{$ortu->alamat}}</textarea></div>

</div>
</div>
</div>
@endsection


@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Anak</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Anak
	<div class="panel-title pull-right">
	<a href="{{URL('previous')}}">Kembali</a></div>
</div>



<div class="panel-body">
	<form action="{{route('anak.show',$anak->id)}}" method="post">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-lable">Nama</label>
				<input type="text" name="a" class="form-control" readonly="" required="" value="{{$anak->nama}}"></div>

		<div class="form-group">
			<label class="control-lable">Nama Orangtua</label>
				<input type="text" name="b" required="" readonly="" class="form-control" value="{{$anak->ortu->nama_ayah}} dan {{$anak->ortu->nama_ibu}}"></div>


		<div class="form-group">
			<label class="control-lable">Umur</label>
				<input type="number" name="c" readonly="" class="form-control" required="" value="{{$anak->umur}}"></div>

		<div class="form-group">
			<label class="control-lable">Alamat</label>
				<textarea name="d" readonly="" class="form-control" rows="10" required="">{{$anak->alamat}}</textarea></div>

	</form>
</div>
</div>
</div>
@endsection
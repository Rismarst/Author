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
	<form action="{{route('author.update',$author->id)}}" method="post">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-lable">Name</label>
				<input type="text" name="a" readonly="" class="form-control" required="" value="{{$author->name}}"></div>


</div>
</div>
</div>
@endsection


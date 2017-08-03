@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Book</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Book
	<div class="panel-title pull-right">
	<a href="{{URL('previous')}}">Kembali</a></div>
</div>



<div class="panel-body">
		<div class="form-group">
			<label class="control-lable">Cover</label>
			<center><img src="{{asset('img/'.$book->cover.'')}}" style=" width: 500px; height: 500px;"></center>
				
			</div>
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-lable">Title</label>
			<input type="text" name="a" class="form-control" value="{{$book->title}}" readonly="">
		</div>

		<div class="form-group">
			<label class="control-lable">Nama Author</label>
			<input type="text" name="name" value="{{$book->author->name}}" class="form-control" readonly="">
		</div>

		<div class="form-group">
			<label class="control-lable">Amount</label>
			<input type="number" name="c" class="form-control" readonly="" value="{{$book->amount}}"></div>
		
	
</div>
</div>
</div>
@endsection
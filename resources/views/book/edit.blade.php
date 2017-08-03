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
	<form action="{{route('book.update',$book->id)}}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-lable">Title</label>
				<input type="text" name="a" class="form-control" required="" value="{{$book->title}}"></div>

		<div class="form-group">
			<label class="control-lable">Nama Author</label>
				<select  name="b" required="" class="form-control">
				@foreach($author as $data)
				<option value="{{$data->id}}">{{$data->name}}</option>
				@endforeach
				</select></div>

		<div class="form-group">
			<label class="control-lable">Amount</label>
				<input type="number" name="c" class="form-control" required="" value="{{$book->amount}}"></div>

		<div class="form-group">
			<label class="control-lable">Cover</label>
			<input type="file" name="cover" class="form-control" required="">{{$book->cover}}</div>

		<div class="form-group">
			<button type="submit" class="btn btn-danger">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button></div>

	</form>
</div>
</div>
</div>
@endsection
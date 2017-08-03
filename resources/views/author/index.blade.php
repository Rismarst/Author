@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<center><h1>Data Author</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data Author
<div class="panel-title pull-right">
<a href="/author/create">Tambah data</a></div></div>

<div class="panel-body">
<table class="table">
<thead>

<tr>
<th>Name</th>
<th>Action</th>
</tr>
</thead>
	@foreach ($author as $data)
	<tr>
		<td>{{$data->name}}</td>
		<td>{{$data->author_id}}</td>


		<td>
			<a class="btn btn-success" href="/author/{{$data->id}}/edit">Edit</a>
		</td>
		<td>
			<a class="btn btn-primary" href="/author/{{$data->id}}">Show</a>
		</td>
		<td>
			<form action="{{route('author.destroy',$data->id)}}" method="post">
		

			<input type="hidden" name="_method" value="DELETE">
			<input type="hidden" name="_token">
			<input class="btn btn-danger" type="submit" value="delete">
			{{csrf_field()}}
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
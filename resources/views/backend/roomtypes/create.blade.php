@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Add Room Type Here</h2>
	</div>

	<form method="post" action="{{route('roomtype.store')}}">
		@csrf
		<div class="container mt-3">
			<label for="rname">Name : </label>
			<input type="text" name="name">
		</div>
		<div class="container mt-3">
			<label for="rname">Capacity : </label>
			<input type="text" name="capacity">
		</div>
		<input type="submit" value="+ Add" class="btn btn-info">
	</form>

@endsection




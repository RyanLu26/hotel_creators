@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Add Romm Type Here</h2>
	</div>

	<form method="post" action="{{route('room.store')}}" enctype="multipart/form-data">
		<div class="container mt-3">
					<label for="rname">Name : </label>
					<input type="text" name="name">
		</div>
	</form>

@endsection




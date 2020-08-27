@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">
		
		<h2>Add Room Here</h2>

		<form method="post" action="{{route('room.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group form-control w-50 h-100">
				<div class="container mt-3">
					<label for="rnumber">Room Number : </label>
					<input type="number" name="rnumber">
				</div>
				<div class="container mt-3">
					<label for="rno">Name : </label>
					<input type="text" name="name">
				</div>
				<div class="container mt-3">
					<label for="rno">Photo : </label>
					<input type="file" name="photo">
				</div>
				<div class="container mt-3">
					<label for="rno">Description : </label>
					<textarea name="description"></textarea>
				</div>
				<div class="container mt-3">
					<label for="rno">Rate : </label>
					<input type="number" name="rate">
				</div>
				<div class="container mt-3">
 					<label>Room Type : </label>
 					<select name="roomtype">
 						<optgroup label="Choose Room Type">
 							@foreach($roomtypes as $roomtype)
 							<option value="{{$roomtype->id}}">{{$roomtype->name}}</option>
 							@endforeach
 						</optgroup>
 					</select>
 				</div>
			</div>
			<input type="submit" value="+ Add" class="btn btn-info">
		</form>

	</div>

@endsection
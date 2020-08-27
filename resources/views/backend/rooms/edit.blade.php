@extends ('backendtemplate')

@section('content')

	<div class="container">
		<h2>Edit Room</h2>

		<form method="post" action="{{route('rooms.update',$room->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Room Number</label>
				<input type="number" name="rno" class="form-control" value="{{$room->rnumber}}" readonly="readonly">
			</div>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="rname" class="form-control" value="{{$room->name}}">
			</div>
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="rphoto" class="form-control" value="{{asset($room->photo)}}">
				<input type="hidden" name="oldphoto" value="{{$room->photo}}">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="desc" class="form-control">{{$room->description}}</textarea>
			</div>
			<div class="form-group">
				<label>Rate</label>
				<input type="number" name="rate" class="form-control" value="{{$room->rate}}">
			</div>
			<div class="form-group">
				<label>Room Type</label>
				<select name="roomtype" class="form-control">
					<optgroup label="Choose Room Type">
						@foreach($roomtypes as $roomtype)
						<option value="{{$roomtype->id}}"
							@if($roomtype->id == $room->roomtype_id)
								{{'selected'}}
							@endif>{{$roomtype->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>
			<input type="submit" value="Update" class="btn btn-outline-primary">
			
		</form>

	</div>


@endsection
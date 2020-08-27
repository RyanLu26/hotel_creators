@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		
		<h2>Confirm Reservation</h2>

		<div class="row">

			<div class="col-md-6">
			
				<p>Name: {{$guest->name}}</p>
				<p>Email: {{$guest->email}}</p>
				<p>Contact: {{$guest->phoneno}}</p>
				<p>Address: {{$guest->address}}</p>

				<p>RoomType : {{$room_type->name}}</p>

				<form method="post" action="{{route('reservedroom.store')}}">
					
					@csrf
					<select name="room_id">
					
						@foreach($rooms as $room)	
							
							@if(!in_array($room->id, $reservedRoomArray))
								
								<option value="{{$room->id}}">{{$room->rnumber}}</option>
								
							@endif
						
						@endforeach
					</select>
					<input type="hidden" name="reservation" value="{{$reserved->id}}">

					<input type="hidden" name="room_rate" value="{{$room->rate}}">

					<input type="submit" name="btnconfirm" value="Confirm">

				</form>

			</div>
			
		</div>

	</div>

@endsection






{{-- <h1>Confirm</h1>
<p>{{$reserved}}</p>
<p>{{$room_type}}</p>
<p>{{$guest}}</p>
<p>{{$rooms}}</p> --}}
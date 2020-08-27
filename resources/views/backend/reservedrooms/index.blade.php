@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Reserved Room List</h2>

		<table class="table-responsive">
			<thead>
				<tr>
					<th>No.</th>
					<th>Room Number</th>
					<th>Guest Name</th>
					<th>Check-In Date</th>
					<th>Check-Out Date</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($reservedrooms as $reservedroom)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$reservedroom->room->rnumber}}</td>
					<td>{{$reservedroom->reservation->guest->name}}</td>
					<td>{{$reservedroom->reservation->cin_date}}</td>
					<td>{{$reservedroom->reservation->cout_date}}</td>
					<td>

						<form method="post" action="{{route('reservedroom.destroy',$reservedroom->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						</form>

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

@endsection
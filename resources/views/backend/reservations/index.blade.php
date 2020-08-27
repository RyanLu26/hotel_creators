@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">
	<h2 class="d-inline-block">Reservation List</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Check-In Date</th>
				<th>Check-Out Date</th>
				<th>Adult</th>
				<th>Child</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($reservations as $reservation)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$reservation->cin_date}}</td>
				<td>{{$reservation->cout_date}}</td>
				<td>{{$reservation->adult}}</td>
				<td>{{$reservation->child}}</td>
				<td>
					
					<a href="{{route('reservation.show',$reservation->id)}}" class="btn btn-warning">Detail</a>

					<a href="{{route('confirm', $reservation->id)}}" class="btn btn-info">Confrim</a>

					<form method="post" action="{{route('reservation.destroy',$reservation->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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
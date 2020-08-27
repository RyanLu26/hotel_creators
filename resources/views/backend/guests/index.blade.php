@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		
		<h2>Guest List</h2>

		<table class="table-responsive">
			<thead>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@csrf
				@php $i=1 @endphp
				@foreach($guests as $guest)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$guest->name}}</td>
						<td>{{$guest->email}}</td>
						<td>{{$guest->phoneno}}</td>
						<td>{{$guest->address}}</td>
						<td>
							<form method="post" action="{{route('guest.destroy',$guest->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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
@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Room Type List</h2>

		<div class="d-flex">
			<a href="{{route('roomtype.create')}}" class="btn btn-info">
				Add Room Type
			</a>
		</div>

		<table class="table-responsive">
			<thead>
				<tr>
					<th>No.</th>
					<th>Type</th>
					<th>Capacity</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($roomtypes as $roomtype)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$roomtype->name}}</td>
					<td>{{$roomtype->capacity}}</td>
					<td>
						<form method="post" action="{{route('roomtype.destroy',$roomtype->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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
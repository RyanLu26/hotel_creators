@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Room Type List</h2>

		<table>
			<thead>
				<tr>
					<th>No.</th>
					<th>Type</th>
					<th>Capacity</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($roomtypes as $roomtype)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$roomtype->name}}</td>
					<td>{{$roomtype->capacity}}</td>
				</tr>
			</tbody>
		</table>

	</div>

@endsection
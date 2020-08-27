@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">
		
		<h2>Room Detail</h2>

			<div class="row">

				<div class="col-md-6 col-6">

					<img src="{{asset($room->photo)}}" class="img img-fluid">
				
				</div>

				<div class="col-md-6 col-6">

					<label> Room Number :</label>
					<span>{{$room->rnumber}}</span><br>
					<label> Name :</label>
					<span>{{$room->name}}</span><br>
					<label> Rate :</label>
					<span>{{$room->rate}} MMK</span><br>
					<label> Description :</label>
					<span>{{$room->description}}</span><br>
					<label> Room Type :</label>
					<span>{{$room->roomtype->name}}</span><br>
					
				</div>
				
			</div>

	</div>

@endsection
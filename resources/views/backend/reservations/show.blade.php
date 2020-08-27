@extends('backendtemplate')

@section('content')

	<div class="container-fluid">

		<h2>Reservation Detail</h2>
		
		<table class="table-responsive">
			
			<thead>
			<tr>
				<th colspan="6" class="text-center">
					<h2>The Hotel</h2>

					<h5>Mandalay</h5>
					<h5 class="pt-4">Tel: 09797921219</h5>
				</th>
			</tr>

			<tr>
				<th colspan="4">
					<div class="row">

						<div class="col-md-3">
							<p>Cashier</p>
						</div>

						<div class="col-md-3">
							<p>: &nbsp;&nbsp;&nbsp; {{Auth::user()->name}}</p>
						</div>

						<div class="col-md-3">
							<p>Date</p>
						</div>

						<div class="col-md-3">
							<p>: &nbsp;&nbsp;&nbsp; {{$reservation->cin_date}}</p>
						</div>

						<div class="col-md-3">
							<p>Reservation No.</p>
						</div>

						<div class="col-md-3">
							<p>: &nbsp;&nbsp;&nbsp; {{$reservation->id}}</p>
						</div>

						<div class="col-md-3">
							<p>Time</p>
						</div>

						<div class="col-md-3">
						<p>: &nbsp;&nbsp;&nbsp;  {{$reservation->created_at}}</p>
						</div>

					</div>
				</th>
			</tr>
			<tr>
				<th>No.</th>
				<th>Name:</th>
				<th>Rate:</th>
				<th>#####</th>
				<th>#####</th>
			</tr>
		</thead>

		</table>

	</div>

@endsection
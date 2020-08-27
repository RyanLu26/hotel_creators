@extends('frontendtemplate')
@section('content')

    <h1 class="text-center">ROYAL'S ACCOMODATION</h1>
    <p class="text-center">LET'S BOOKING TO OUR ROYAL HOTEL</p>
    
    @foreach($rooms as $room)
    <div class="col-lg-4 col-md-6 mb-4 py-5">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="{{asset($room->photo)}}" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">{{$room->name}}</a>
          </h4>
          <h5>{{$room->rate}}</h5>
          <p class="card-text">{{$room->description}}</p>
        </div>
        <div class="card-footer">
          <a href="{{URL::route('homepage')}}#BookingArea" class="btn btn-info btn-sm hotel_booking_area position" data-id="{{$room->id}}" data-name="{{$room->name}}" data-photo="{{asset($room->photo)}}" data-rate="{{$room->rate}}">Buy Now</a>
          <a href="{{route('frontenddetail',$room->id)}}" class="btn btn-primary btn-sm">Detail</a>
        </div>
      </div>
    </div>

    @endforeach
@endsection
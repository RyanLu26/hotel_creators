@extends('frontendtemplate')
@section('content')
  
    <h1 class="text-center text-uppercase">Royal's Accomodation</h1>
    <div class="container-fluid">
       <div class="hotel_booking_area position" id="BookingArea">
           <div class="container hotel_booking_table">
               
                <div class="row">                   <div class="col-md-3 col-sm-12">
                       <h2 class="text-dark">Book<br> Your Room</h2>
                   </div>
                   <div class="col-md-9 col-sm-12">
                    <form method="post" action="{{route('reservation.store')}}">
                    @csrf 
                       <div class="boking_table">
                           <div class="row">
                               <div class="col-md-4">
                                   <div class="book_tabel_item">
                                       <div class="form-group">
                                           <div class='input-group date' id='datetimepicker11'>
                                               <label><b>Arrival Date</b></label>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class='input-group date' id='datetimepicker1'>
                                               <input type='date' class="form-control" placeholder="Arrival Date" name="cin_date" />
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-md-4">
                                   
                                   <div class="book_tabel_item">
                                       <div class="form-group">
                                           <div class='input-group date' id='datetimepicker11'>
                                              <label><b>Departure Date</b></label>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class='input-group date' id='datetimepicker1'>
                                               <input type='date' class="form-control" placeholder="Departure Date" name="cout_date" />
                                               
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="container">
                                 <form class="form-group">
                                   
                                  <label>Name :</label>
                                  <input type="text" name="name"><br>

                                  <label>Email :</label>
                                  <input type="email" name="email"><br>

                                  <label>Phone :</label>
                                  <input type="number" name="phoneno"><br>

                                  <label>Address :</label>
                                  <input type="text" name="address"><br>


                                 </form>
                               </div>
                               <div class="col-md-4">
                                   <div class="book_tabel_item">
                                       <div class="input-group">
                                           <select class="wide" name="roomtype">
                                               <option data-display="Child">Room Type</option>
                                               <option value="1">Standard</option>
                                               <option value="2">Superior</option>
                                               <option value="3">Deluxe</option>
                                           </select>
                                       </div>

                                       <div class="input-group">
                                           <select class="wide" name="adult">
                                               <option data-display="Adult">Number of Adults</option>
                                               <option value="1">01</option>
                                               <option value="2">02</option>
                                               <option value="3">03</option>
                                           </select>
                                       </div>

                                       <div class="input-group">
                                           <select class="wide" name="child">
                                               <option data-display="Child">Number of Childern</option>
                                               <option value="1">01</option>
                                               <option value="2">02</option>
                                               <option value="3">03</option>
                                           </select>
                                       </div>
                                       <button class="book_now_btn button_hover" type="submit">Book Now</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                      </form>
                   </div>
                   </div>
           </div>
       </div>
    </div>


    <div class="container py-3">
        <h1 class="text-center text-uppercase">Royal's Facilities</h1>
        <p class="text-center">Who are in extremely love with eco friendly system.</p>
        <div class="row py-3">
            <div class="col-md-6">
                {{-- <img src="images/new_arriavle.jpg" class="img-fluid"> --}}
                <div class="row">
                    <div class="col-md-12 mt-2 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/resturant.jpg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Resturant</b></h5>
                                <p class="card-text">A restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/pool.jpeg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Swimming Pool</b></h5>
                                <p class="card-text">Royal Hotel’s swimming pool is set with a perfect venting system, 
                                and a luxury pool surrounded with natural light ensuring a relaxing atmosphere.
                                </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/sport.jpg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Sports Club</b></h5>
                                <p class="card-text">Sport and fitness center is included in the room rate. Free access every day between 06:00 – 10:00. Before entering, please read the rules, available in reception.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 mt-2 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4 ">
                                <img src="{{asset('frontend/img/bar.jpeg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8 ">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Bar</b></h5>
                                <p class="card-text">Enjoy a drink in our Royal Hotel's bar, is a truly enjoyable experience – the views of the natural harbour by natural stones will help to ensure that you will have a “relaxing drink”</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/car.jpg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Rental Cars</b></h5>
                                <p class="card-text">Royal Hotel searches cheap car rental prices in over 53000 locations worldwide. Find your ideal ... online today. Wide range of car options available – economy, luxury, family-sized cars</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/gym.jpg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Gymnesium</b></h5>
                                <p class="card-text">With a mix of equipment and weights, our Royal Hotel gym will cater to you whether you want to do a cardio workout.Once you've worked up a sweat.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row">
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
   </div>


@endsection

@section('script')
    <script type="text/javascript" src="{{asset('frontend/js/count.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection
    
    

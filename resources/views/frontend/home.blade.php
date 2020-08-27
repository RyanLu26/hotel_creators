@extends('frontendtemplate')
@section('content')
  <h1>Testing git </h1>
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
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut</p>
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
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut</p>
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
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut</p>
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
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut</p>
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
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut</p>
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
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h1 class="text-center text-uppercase">Royal's Accomodation</h1>
    <div class="container-fluid">
       <div class="hotel_booking_area position">
           <div class="container">
               <div class="hotel_booking_table">
                   <div class="col-md-3">
                       <h2 class="text-dark">Book<br> Your Room</h2>
                   </div>
                   <div class="col-md-9">
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

    {{-- <div class="container container-fluid py-5">
      <div class="card">
        <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Tailored Jeans</h1>
        <p class="price">$19.99</p>
        <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <button>Book Now</button>
        <a class="btn btn-dark" href="{{route('home')}}">Detail</a>
      </div>
    </div> --}}

    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 my-4">
          <div class="card">
            <div class="card_img">
              <img src="{{asset('frontend/img/download.jpeg')}}" class="card-img-top border-bottom image">
            </div>
            <div class="card-body text-center">
              <h4>Deluxe</h4>
              <p>Double Room</p>
              <hr class="item-divider">
              <p>35000 MMK</p>
              <div class="view-detail py-2" data-target="#detailModal" data-toggle="modal">
                
                <button class="btn btn-outline-dark btn-block">Room's Detail</button>
              </div>
              <a href="{{route('frontendcheckout')}}" class="btn btn-outline-dark btn-block">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!--detail modal-->
        <div class="modal fade" id="detailModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Room's Detail</h3>
                <button class="close" data-dismiss="modal">
                  <span>&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="{{asset('frontend/img/download.jpeg')}}" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                      <h4>Room's Information</h4>
                      <p>Room No : 0101</p>
                      <p>Room Price : 35000 MMK</p>
                      <p>Category : Deluxe</p>
                      <p>Subcategory : Double</p>
                      <p>Description : Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip  commodo
                      consequat.</p>
                      <div class="form-group">
                        <label for="qty">Qty :</label>
                        <input type="number" name="" id="qty" class="form-control w-50">
                      </div>
                      <a href="{{route('frontendcheckout')}}" class="btn btn-outline-dark btn-block">Book Now</a>
                      {{-- <button class="btn btn-outline-dark">Book Now</button> --}}
                      <!-- <button class="btn btn-outline-dark">Add to Cart</button> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-outline-dark" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

@endsection
    
    

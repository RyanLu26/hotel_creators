@extends('frontendtemplate')
@section('content')

    <h1 class="text-center">ROYAL'S ACCOMODATION</h1>
    <p class="text-center">LET'S BOOKING TO OUR ROYAL HOTEL</p>
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
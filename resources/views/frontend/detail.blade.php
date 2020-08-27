@extends('frontendtemplate')
@section('content')
 
     	   <!-- Begin Page Content -->
    <div class="container container-fluid">

    	<!-- Page Heading -->
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
    		<h1 class="h3 mb-0 text-gray-800">Room's Detail</h1>
    		<a href="/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Go Back </a>
    	</div>

       <div class="row">
       	<div class="col-md-4">
               <img src="{{asset($room->photo)}}" class="img-fluid">    		
       	</div>
       	<div class="col-md-8 px-5 text-justify">
       		<h4 class="text-dark">Room Name: <span>{{$room->name}}</span></h4>
       		<h4 class="text-dark">Room Type: <span>{{$room->roomtype->name}}</span></h4>
       		<h4 class="text-dark">Rate: <span>{{$room->rate}}</span></h4>
       		<h5 class="text-dark">Description: <span>{{$room->description}}</span></h5>
       	</div>
       </div>
   </div>
   	
     </div>
@endsection

   @section('script')
       <script type="text/javascript" src="{{asset('frontend/js/count.js')}}"></script>
       <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
   @endsection


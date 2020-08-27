<!DOCTYPE html>
<html>
<head>
	<title>Royal Hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('frontend/img/royal.svg')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/bootstrap/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/fontawesome/f/css/all.min.css')}}">
</head>
<body>
	<!-- Navigation-->
	<nav class="navbar navbar-expand-md navbar-light bg-light menu py-3">
		<div class="container">
			<a href="{{route('homepage')}}" class="navbar-brand text-success">Royal Hotel</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
				<!-- data-target is a function to call the id-->
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="mainMenu">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="{{route('homepage')}}" class="nav-link">HOME</a>
					</li>
					<li class="nav-item">
						<a href="{{route('rooms')}}" class="nav-link">ACCOMODATION</a>
					</li>
                    <li class="nav-item">
                        <a href="{{route('frontendgallery')}}" class="nav-link">GALLERY</a>
                    </li>
					<li class="nav-item">
						<a href="{{route('frontendabout')}}" class="nav-link">ABOUT</a>
					</li>
					<li class="nav-item">
						<a href="{{route('frontendcontact')}}" class="nav-link">CONTACT</a>
					</li>

                    <li class="nav-item">
                        <a href="{{URL::route('homepage')}}#BookingArea" class="nav-link">BOOKING</a>
                    </li>

                    <li class="nav-item">
                         @guest
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                         </li>
                         @if (Route::has('register'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                         </li>
                         @endif
                         @else
                         <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 {{ Auth::user()->name }} <span class="caret"></span>
                             </a>

                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>


                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                         </div>
                     </li>
                     @endguest
                    </li>
				</ul>
			</div>
		</div>
	</nav>

    <!-- banner Header Carousel-->
    <div class="container container-fluid my-3">
        <div class="carousel slide" id="headerCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#headerCarousel" data-slide-to="0" class=""></li>
                <li data-target="#headerCarousel" data-slide-to="1" class=""></li>
                <li data-target="#headerCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('frontend/img/c1.jpg')}}" class="d-block w-100">
                    <div class="img-overlay"></div>
                    <div class="carousel-caption">
                        <h3><b>ROYAL HOTEL</b></h3>
                        <p>Dear customer,if you are finding fanstatic natures,our Royal Hotel is the best for you.<br>To have awesome tastes,come and join with us<br>
                        Wecome to Royal Hotel</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('frontend/img/c2.jpg')}}" class="d-block w-100">
                    <div class="img-overlay"></div>
                    <div class="carousel-caption">
                        <h3><b>ROYAL HOTEL</b></h3>
                        <p>Dear customer,if you are finding fanstatic natures,our Royal Hotel is the best for you.<br>To have awesome tastes,come and join with us<br>
                        Wecome to Royal Hotel</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('frontend/img/c3.jpg')}}" class="d-block w-100">
                    <div class="img-overlay"></div>
                    <div class="carousel-caption">
                        <h3><b>ROYAL HOTEL</b></h3>
                        <p>Dear customer,if you are finding fanstatic natures,our Royal Hotel is the best for you.<br>To have awesome tastes,come and join with us<br>
                        Wecome to Royal Hotel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

	@yield('content')

    

    <!-- contact block -->
    <div class="contact-block my-4">
    	<div class="container text-center text-light py-4">
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		tempor incididunt ut labore et dolore magna aliqua.</p>
    		<a href="content.html" class="btn btn-outline-light">Contact Us</a>
    	</div>
    </div>

    <!-- our service-->
    <div class="container">
    	<div class="row">
    		<div class="col-md-4 px-5">
    			<h5>Our Delivery</h5>
    			<p class="text-justify text-muted">You can order from home.We will knock you soon.</p>
    		</div>
    		<div class="col-md-4 px-5">
    			<h5>Our Services</h5>
    			<p class="text-justify text-muted">Quick Delivery,Fresh Ones,Right Time Information,Trust Contact</p>
    		</div>
    		<div class="col-md-4 px-5 social">
    			
    			<div class="row">
    				<div class="offset-md-2 col-md-8">
    			 		<h5>Our Social</h5>
    				   <div class="row">
                           <div class="col-4">
                               <a href="https://www.facebook.com/yeyintminoo" width="25px"><i class="fab fa-facebook-square"></i></a>
                           </div>

                           <div class="col-4">
                               <a href="https://www.twitter.com/@yeyintminnoo"><i class="fab fa-twitter-square"></i></a>
                           </div>

                           <div class="col-4">
                               <a href="https://www.instagram.com/yeyint_minoo"><i class="fab fa-instagram-square"></i></a>
                           </div>
                       </div>	                                 
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <!-- footer -->
    <footer class="footer footer-success bg-light">
    	<div class="container text-center text-dark">
    		<p class="m-0 py-3">
                Copyright &copy; All Right Reserved | <b>YeYint MinOo</b>
            </p>
    	</div>
    </footer>
	<script type="text/javascript" src="{{asset('frontend/vendor/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @yield('script')
</body>
</html>

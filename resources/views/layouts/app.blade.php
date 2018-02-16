<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Units Website @yield('title')</title>


  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script>


$(function() {
  /**
  * NAME: Bootstrap 3 Multi-Level by Johne
  * This script will active Triple level multi drop-down menus in Bootstrap 3.*
  */
  $('li.dropdown-submenu').on('click', function(event) {
      event.stopPropagation(); 
      if ($(this).hasClass('open')){
          $(this).removeClass('open');
      }else{
          $('li.dropdown-submenu').removeClass('open');
          $(this).addClass('open');
     }
  });
});





</script>
    

   
</head>
<body id="app-layout">
<nav class="navbar navbar-default" role="navigation" style="margin:5px; border:#33596b; background-color:#33596b;">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="{{url('home')}}" style="color:#00d857; font-size:30px"><span style="font-size: 35px">3</span>Qarat</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
  <ul class="nav navbar-nav">
    
      @include('layouts.nav')

 
  </ul>







  
   <ul class="nav navbar-nav navbar-right" style="padding-right:15px">
   @if (Auth::guest())

      <li><a href="{{ route('login') }}" style="color:#00d857; border:1px solid #375d6f; padding:5px 7px; margin:8px; font-size:15px">Login</a></li>
      <li><a href="{{ route('register') }}" style="color:#00d857; border:1px solid #375d6f; padding:4px 6px; margin:8px; font-size:15px">Register</a></li>
      @else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style=" font-size:20px; color:#1fbe5e">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu">

          <li>
            <a href="{{ route('profile')}}" >
               Profile
            </a>
          </li>
          <li>
            <a href="{{ route('logout')}}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout

            </a>

            <form id="logout-form" action="{{ route('logout')}}" method="Post" style="display: none;">


            {{ csrf_field()}}
              

            </form>
            

          </li>
         
          



           </ul>
           
          </li>
        @endguest

      
    </ul>
    </div>
  </div>
</nav>










 







  








                      
        @yield('content')




<div id="app">

        <div class="footer-section">
    <div class="footer1">
	<div class="container">
		    <div class="col-md-4 footer-one">
		      <div class="foot-logo">
		          <img class="logo" src="https://www.alaskarealestate.com/images/logo/logo_graphic_250h.png" style="width: 100%" >
		      </div> 
		       
		       <p> Thank you for visiting our site <br>
		       We Wish you can find convenient Unit For you
                </p>
            <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>
		    </div>
		    <div class="col-md-2 footer-two" style="margin: 10px 120px  0px 30px">
		       <h5>Quick Links</h5>
		          <ul>
                    <li><a href="{{url('/about')}}"> About Us</a> </li>
                    <li><a href="#"> Our News</a> </li>
                    <li><a href="#"> Our Services</a> </li>
                    <li><a href="#"> Contact Us</a> </li>
                  </ul>
                  
		    </div>
		   
		    <div class="col-md-4 footer-four">
		       <h5>Contact Us</h5>
		         <img src="http://iacademy.mikado-themes.com/wp-content/uploads/2017/05/footer-img-1.png">  
                  
		    </div>
		    
		
		
		
		
		
		<div class="clearfix"></div>
	</div>
</div>

</div>
<div class="footer-bottom">
        <div class="container">
					<div class="row">
						<div class="col-sm-6 ">
							<div class="copyright-text">
								<p>CopyRight © 2017 Digital All Rights Reserved</p>
							</div>
						</div> <!-- End Col -->
						<div class="col-sm-6  ">
						    <div class="copyright-text pull-right">
								<p> <a href="#">Home</a> | <a href="#">Privacy</a> |<a href="#">Terms & Conditions</a> | <a href="#">Refund Policy</a> </p>
							</div>					
													
						</div> <!-- End Col -->
					</div>
				</div>
    </div>





    <!-- Scripts -->
</body>
</html>


@extends('layouts.app')
@section('title')

Welcome
@endsection

<!DOCTYPE html>
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">


<script src="{{ asset('js/app.js') }}"></script>

<style>
    body {
             background-image: url('http://www.icanread.asia/uploads/homepage/2013/09/22/112_o_background.jpg');             /*Image Credit to www.icanread.asia*/
             background-repeat: no-repeat;
            }
</style>
@yield('header')

</head>




    @section('content')
    
     <!-- SEARCH -->
   
@include('layouts.search')

<!-- Slider -->
@include('layouts.slider')






                                <!--ALOT OF UNITS -->

                                <h1> Houses Under 100.000 </h1>

                                <div class="container-fluid" style="margin-top:30px">
                                <div class="row">
                                    <div class="col-md-3">
                            
                                <img src="http://hbrd.me/wp-content/uploads/2017/11/nice-house-best-25-nice-houses-ideas-on-pinterest-dream-houses-nice-big-1.jpg" alt="dsadas" />
                                <h3 style="color: #0ebb67; diplay:inline">Alex</h3>
                                <span style="display:block">Price : $100.000</span>
                            
                                <a  href="#" class="btn btn-info" >Book Now</a>
                                <a href="#" class="btn btn-info">Details</a>
                            
                            </div>
                            
                            
                            
                            </div>
                            </div>
                            





<h1> Houses Above 100.000 </h1>

<div class="container-fluid" style="margin-top:30px">
    <div class="row">
        <div class="col-md-3">

	<img src="http://hbrd.me/wp-content/uploads/2017/11/nice-house-best-25-nice-houses-ideas-on-pinterest-dream-houses-nice-big-1.jpg" alt="dsadas" />
    <h3 style="color: #0ebb67; diplay:inline">Alex</h3>
	<span style="display:block">Price : $100.000</span>

	<a  href="#" class="btn btn-info" >Book Now</a>
	<a href="#" class="btn btn-info">Details</a>

</div>



</div>
</div>







<!-- OUR TEAM -->

@include('layouts.ourteam')






@endsection


  <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/file1.js') }}"></script>

    </body>
</html>

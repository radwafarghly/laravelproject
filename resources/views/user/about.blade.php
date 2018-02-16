@extends('layouts.app')

@section('title')

About Us

@endsection


@section('content')



<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">



</head>
<body>



<div class="aboutus-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <div class="col-md-4 col-sm-6 col-xs-12">    
                <div class="aboutus-image float-left hidden-sm">
                <img src="http://www.resultsmdceuticals.com/wp-content/uploads/2017/06/Fancy-Nice-Modern-Houses-46-In-Home-Designing-Inspiration-with-Nice-Modern-Houses-600x400.jpg" alt="" style="height: 413px;"></div>
                </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="aboutus-content " >

                    <h1>About Us <span><p style="font-size: 50px; display: inline-block;">
                    3
                    </p>Qarat</span></h1>
                    <h4><span style="color:#53bc34">3Qarat</span> Company</h4>
                    <p><span style="color: #53bc34; font-size: 20px;">3Qarat</span> is a Website and it is designed and developed by our team .  <br> Whatever you like any sort of houses , <span style="color: #53bc34; font-size: 20px;">3Qarat</span>  makes it easy to choose your favourite house. We have alot of Compounds in many Cities .  <br> With <span style="color: #53bc34; font-size: 20px;">3Qarat</span> , you get access to over 100 houses by alot of views , Price , Location and Space . <br> <span style="color: #53bc34; font-size: 20px;">3Qarat</span>  includes detailed description covering all our Projects , Buildings and Units .


</p>
                    
                    <div class="counter ">
                        
                        <div class="single-counter text-center">
                            <h2 class="counter">1670</h2>
                            <p>Count Of Units</p>
                        </div>
                        
                        <div class="single-counter text-center">
                            <h2 class="counter">90</h2>
                            <p>Buildings</p>
                        </div>
                        
                        <div class="single-counter text-center">
                            <h2 class="counter">13</h2>
                            <p>Compound</p>
                        </div>
                        
                        <div class="single-counter text-center">
                            <h2 class="counter">7</h2>
                            <p>Cities</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>    
            </div>
        </div>
    </div>
</div>


















@endsection
</body>
</html>
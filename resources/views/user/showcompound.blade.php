@extends('layouts.app')
@section('title')

Project
@endsection
<head>
<style>
.word{

    margin-top:50px
}

.pro{

    width:90%;
      height:300px; 
      margin:30px 0px
}
.detail{

    text-align:center;
}



/*Slider*/

/* carousel */
.media-carousel 
{
  margin-bottom: 0;
  padding: 0 40px 30px 40px;
  margin-top: 30px;
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel .carousel-indicators .active 
{
  background: #333333;
}
.media-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */






</style>


<script>
/*Slider*/


$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});




</script>




</head>

@section('content')


<div class="container">
<div class="row">
<div class="col-md-6">
<div class="word">
<h1> Project Name : Radwa </h1>
<h2> Project City : Ahmed </h2>
<h3>Description</h3>

<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse libero, natus vel dolor atque officia veniam nisi fugiat est quibusdam praesentium incidunt aspernatur illo cumque neque minima ipsum ex error?</p>
</div>

</div>


<div class="col-md-6">


<img class ="pro" src="https://media1.popsugar-assets.com/files/thumbor/Uk5FcX4wOwofQyHCYfPI-0S8It0/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2016/04/04/825/n/1922794/e2666e80e43f7421_Britney-Spears-Home-For-Sale-In-Thousand-Oaks-CA-Exterior-2/i/bird-eye-view-compound-reveals-just-how-big.jpg"   > 



</div>
</div>
</div>


<!-- SLIDER -->



<div class="container">
  <div class="row">
    <h2 class="detail">Our Units</h2>
  </div>
  <div class='row'>
    <div class='col-md-12'>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="{{url('/units')}}"><img alt="" src="http://placehold.it/150x150"></a>
                <p class="detail">Name</p>
                <p class="detail">Location</p>

              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                <p class="detail">Name</p>
                <p class="detail">Location</p>

              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                <p class="detail">Name</p>
                <p class="detail">Location</p>

              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                <p class="detail">Name</p>
                <p class="detail">Location</p>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                <p class="detail">Name</p>
                <p class="detail">Location</p>

              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                <p class="detail">Name</p>
                <p class="detail">Location</p>

              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                <p class="detail">Name</p>
                <p class="detail">Location</p>

              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                <p class="detail">Name</p>
                <p class="detail">Location</p>

              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                <p class="detail">Name</p>
                <p class="detail">Location</p>

              </div>      
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>                          
    </div>
  </div>
</div>








@endsection

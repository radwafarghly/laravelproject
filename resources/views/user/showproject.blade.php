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
@foreach($project as $project)
      <div class="row">
            <div class="col-md-6">
                <div class="word">
                

                        <h1> Project Name :<span> {{$project_name }}</span></h1>
                        <h2> Project City : <span> {{ $project-> city }} </span></h2>
                        <h2> Project Governate:<span> {{ $project-> governate }} </span></h2> 
                </div>

           </div>
            <div class="col-md-6">
                      <img class ="pro" src="/storage/image/{{ $project->img }}" > 
            </div>
      </div>
@endforeach
</div>
{{--
@foreach($compounds as $compound)
                        <h1> compound Name :<span> {{$compound->name }}</span></h1>
                        <h2>  location : <span> {{ $compound-> location }} </span></h2>
                        <h2> img:<span> {{ $compound-> img }} </span></h2>
@endforeach

@foreach ($compounds->chunk(3) as $chunk)
    <div class="row">
          @foreach($chunk as $compound)
                  <h1> compound Name :<span> {{$compound->name }}</span></h1>
                  <h2>  location : <span> {{ $compound-> location }} </span></h2>
                  <h2> img:<span> {{ $compound-> img }} </span></h2>
          @endforeach
    </div>
@endforeach--}}

<!-- SLIDER -->



<div class="container">
    <div class="row">
        <h2 class="detail">{{$project_name }} Compounds</h2>
      </div>
      <div class='row'>
            <div class='col-md-12'>
                  <div class="carousel slide media-carousel" id="media">

                        <div class="carousel-inner">
                        @foreach ($compounds->chunk(3) as $key => $chunk)

                                <div class="item{{ $key == 0 ? ' active' : '' }}">
                                        <div class="row">
                                            @foreach($chunk as $compound)
                                              <div class="col-md-4">
                                                <a class="thumbnail" href="{{ route('showcompound',array('compound_name'=> $compound->name)) }}"><img alt="" src="/storage/image/{{ $compound->img }}"></a>
                                                <p class="detail">{{$compound->name }}</p>
                                                <p class="detail">{{$compound->location }}</p>
                                              </div> 
                                              @endforeach  
                                        </div>
                                       
                                </div>
                                @endforeach
                        </div>
                      
                    <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#media" class="right carousel-control">›</a>
                  </div>                          
            </div>
      </div>                         
</div>
  








@endsection

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

                <table class="table  table-bordered">
                <tr>
                

                        <th> Project Name </th>
                        <th> Project City </th>
                </tr>
                <tr>
                <tbody>
                        <td><span> {{$project_name }}</span></td>
                        <td><span> {{ $project-> city }} </span></td>
                        </tbody>        
                </tr>
                </table>
                </div>

           </div>
            <div class="col-md-6">
                      <img class ="pro" src="{{ asset('/storage/image/'.$project->img) }}" > 
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

                       
                        @foreach ($compounds->chunk(3) as $key => $chunk)

                                <div class="item{{ $key == 0 ? ' active' : '' }}">
                                        <div class="row">
                                            @foreach($chunk as $compound)
                                              <div class="col-md-4">
                                                <a class="thumbnail" href="{{ route('showcompound',array('compound_name'=> $compound->name)) }}"><img style="height:300px" alt="" src="{{ asset('/storage/image/'.$compound->img) }}"></a>
                                                <div style="font-size:18px; position: absolute;
                                top:7; left:22px; text-align:center; cursor:pointer; background-color:rgba(0,255,0,0.3); color: #fff; padding:5px;" class="detail">{{$compound->name }}</div>
                                                <div style="font-size:18px; position: absolute;  color: #fff;
                                top:60; left:22px; text-align:center; cursor:pointer; background-color:rgba(0,255,0,0.3); padding:5px;" class="detail">{{$compound->location }}</div>
                                              </div> 
                                              @endforeach  
                                        </div>
                                       
                                </div>
                                @endforeach
                        </div>
                
                  </div>                          
            </div>
 
  








@endsection

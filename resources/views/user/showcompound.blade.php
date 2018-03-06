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
      margin:30px 0px;
}
.detail{

    text-align:center;
}










</style>







</head>

@section('content')


<div class="container">
@foreach($compound as $compound)
      <div class="row">
            <div class="col-md-6">
                <div class="word">
                <table class="table  table-bordered">
                <tr>
                        <th> Compound Name</th>
                        <th> Compound Location</th>
                  </tr>
                  <tr>  
                  <tbody>
                       <td> <span> {{ $compound_name }}</span></td>
                       <td> <span> {{ $compound-> location }} </span></td>
                  </tbody>
                </tr>
                </table>
                </div>

           </div>
            <div class="col-md-6">
                      <img class ="pro" src="{{ asset('/storage/image/'.$compound->img) }}"> 
            </div>
      </div>
@endforeach
</div>

{{--
@foreach($units as $unit)
                        <h1> compound Name :<span> {{$unit->size }}</span></h1>
                        <h2>  location : <span> {{ $unit-> price }} </span></h2>
                        <h2> img:<span> {{ $unit-> img }} </span></h2>
@endforeach --}}

<!-- SLIDER -->


<div class="container">
<div class="row">
    <h2 class="detail">{{$compound_name  }} Units</h2>
  </div>
  <div class='row'>
        <div class='col-md-12'>

                    @foreach ($units->chunk(3) as $key => $chunk)

                                    <div class="row">
                                        @foreach($chunk as $unit)
                                          <div class="col-md-4">
                                            <a class="thumbnail" href="{{ route('showunits',array('compound_name'=> $compound_name,'building_number'=> $unit->bu_num,'unit_number'=> $unit->number)) }}"><img style="height:300px;" src="{{ asset('/storage/image/'.$unit->img) }}"></a>
                                            <div  style="font-size:18px; position: absolute;
                                top:7; left:22px; text-align:center; cursor:pointer; background-color:rgba(0,255,0,0.3); color: #fff; padding:5px;"  class="detail">{{$unit->price }} EGB</div>
                                            <div  style="font-size:18px; position: absolute;  color: #fff;
                                            top:60; left:22px; text-align:center; cursor:pointer; background-color:rgba(0,255,0,0.3); padding:5px;"   class="detail">{{$unit->size }}   M</div>
                                           
                                          </div> 
                                          @endforeach  
                                    </div>
                                   
                          
                            @endforeach
                    </div>
                  
              </div>                          
        </div>
 








@endsection

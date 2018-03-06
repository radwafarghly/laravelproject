@extends('layouts.app')
@section('content')

{!! Form::open(array('route' => 'queries.index' ,'method'=>'GET','class'=>'form navbar-form navbar-right searchform')) !!}
    {!! Form::text('search', null, array('required','class'=>'form-control','placeholder'=>'Search')) !!}
     {!! Form::submit('Search',array('class'=>'btn btn-default')) !!}
 {!! Form::close() !!}

 @if (count($testsearch) === 0)
           <p> html showing no articles found</p>
@elseif (count($testsearch) >= 1)

<div class="container">
<div class='row'>
     <div class='col-md-12'>

                 @foreach ($testsearch->chunk(3) as $key => $chunk)
                 <div class='row'>
                         @foreach($chunk as $unit)
                             <div style="padding:10px;" class="col-md-4">
                             <a class="thumbnail" href="#" style="height:300px;"><img src="{{ asset('/storage/image/'.$unit->img) }}"></a>
                             <div style="font-size:18px; position: absolute;
                             top:18; left:17px; text-align:center; cursor:pointer; background-color:rgba(0,0,255,0.3); color: #fff; padding:5px;" class="detail">{{$unit->price }}$</div>
                             </br>
                             <div style="font-size:18px; position: absolute;  color: #fff;
                             top:60; left:17px; text-align:center; cursor:pointer; background-color:rgba(0,0,255,0.3); padding:5px;" class="detail">{{$unit->size }}M</div>

                              <a style="position: relative;top: -17px;left: 100px;" href="#" class="btn btn-success">View Details</a>
                             </div> 
                             @endforeach  
                       </div>
                         @endforeach
                 </div>
           </div>
   </div>
@endif
@endsection

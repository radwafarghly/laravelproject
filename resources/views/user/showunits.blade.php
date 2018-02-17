@extends('layouts.app')
@section('title')

Project
@endsection
<head>
<style>


.pro{

    width:90%;
      height:400px; 
      margin:30px 0px
}
.detail{

    text-align:center;
}

.book{

  border:1px solid #53bc34;
  background-color:#53bc34;
  color:white;
  font-size:40px
}

.butt{
  border:1px solid #53bc34;
  background-color:#53bc34;
  color:white;
 margin-top:25px; 
 padding:3px 15px;
 font-size:20px
}
</style>





</head>

@section('content')


<div class="container">
@foreach($unit as $unit)

        <div class="row">
              <div class="col-md-6">
                    <div class="word">
                         <h1> Size:<span> {{$unit->size }}</span></h1>
                        <h2>  Price: <span> {{ $unit-> price }} </span> <span> LE </span></h2>
                        <h2> Rooms:<span> {{ $unit-> rooms }} </span></h2>
                        <h3>Floor Number: <span> {{ $unit-> floor }} </span></h3>
                        <h3>City: <span> {{ $unit-> pro_city }} </span></h3>
                        @if(($unit->status) == 0)
                        <h3>Status:<span> Open </span>  </h3>
                        @else
                        <h3>Status:<span> Close </span>  </h3>
                       @endif
                        <h3>Building Number:<span> {{ $unit-> bu_num }} </span></h3>
                        <h3>Compound Name:<span> {{ $unit-> com_name }} </span> </h3>
                        <h3>Project Name: <span> {{ $unit-> pro_name }} </span> </h3>
                        <h3>Extra:<span> {{ $unit-> extra }} </span>  </h3>
                     
                   </div>

               </div>


            <div class="col-md-6">
                <img class ="pro" src="/storage/image/{{ $unit->img }}"> 
            </div>
      </div>
      @endforeach 
</div>



<div class="container">

          <div class="row">
                      <div class="col-md-2">
                      </div>
                      <div class="col-md-2">
                      </div>

                      <div class="col-md-2">

                      <h1 class="book" ><span> {{ $unit-> price }} </span></h1>
                      </div>
                      
                      <div class="col-md-2">
                           <a class="btn btn-primary butt" href="#">Book</a>

                      </div>
            </div>


</div>
{{--<?php 
print_r($unit);
?>
--}}

@endsection

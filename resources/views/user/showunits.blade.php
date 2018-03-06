@extends('layouts.app')
@section('title')

Project
@endsection
<head>
<style>







</style>





</head>

@section('content')

@include('user.slide')

</br>

<div class="container">

@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>
@endif
@foreach($unit as $unit)
        <div class="row">
              <div class="col-md-12">
                    <div class="word">
                      <table class="table table-bordered">
                       <tr>
                       <th> Number</th>

                         <th> Size</th>
                         <th>  Price</th>
                         <th> Rooms</th>
                         <th>Floor Number</th>
                         <th>City</th>
                         <th>Building Number</th>
                         <th>Compound Name</th>
                         <th>Project Name</th>
                         <th>Extra</th>
                         <th>Id</th>
                         <th>user Id</th>


                       
                        </tr>
                        <tr>
                        <tbody>
                        <td><span> {{$unit->number }}</span></td>
                         <td><span> {{$unit->size }}</span></td>
                         <td><span> {{ $unit-> price }} </span> <span> LE </span></td>      
                        <td><span> {{ $unit-> rooms }} </span></td>
                        <td><span> {{ $unit-> floor }} </span></td>
                        <td><span> {{ $unit-> pro_city }} </span></td>
                        <td><span> {{ $unit-> bu_num }} </span></td>

                        <td><span> {{ $unit-> com_name }} </span> </td>

                        <td><span> {{ $unit-> pro_name }} </span> </td>

                        <td><span> {{ $unit-> extra }} </span>  </td>
                        <td><span> {{ $unit-> id }} </span>  </td>
                        <td><span> {{ $unit-> user_id }} </span>  </td>


                     </tbody>
                    </tr>
                        </table>
                     
                   </div>

               </div>
                        <div style="position:relative; left:700px;">
                        <a class="btn btn-primary" href="{{ route('book',array('compound_name'=> $compound_name,'building_number'=> $unit->bu_num,'unit_number'=> $unit->number,'unit_id' => $unit->id)) }}">Book</a>

                        </div>
                       


</div>


           
      </div>
      @endforeach 
</div>


</br>

@endsection

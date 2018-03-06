
@extends('layouts.app')
@section('title')

Welcome
@endsection
  



    @section('content')
    
     <!-- SEARCH -->
   


<!-- Slider -->
@include('layouts.slider')






                                <!--ALOT OF UNITS -->

 <h1 style="text-align:center;"> Houses Under 100.000 </h1>
 <div class="container">
   <div class='row'>
        <div class='col-md-12'>

                    @foreach ($units->chunk(3) as $key => $chunk)

                    <div class='row'>

                            @foreach($chunk as $unit)
                                <div style="padding:10px;" class="col-md-4">
                                <a class="thumbnail" href="{{ route('showunits',array('compound_name'=>$unit->com_name,'building_number'=> $unit->bu_num,'unit_number'=>$unit->un_num)) }}"><img style="height:300px;" alt="" src="{{ asset('/storage/image/'.$unit->img) }}"></a>
                                <div style="font-size:18px; position: absolute;
                                top:18; left:17px; text-align:center; cursor:pointer; background-color:rgba(0,0,255,0.3); color: #fff; padding:5px;" class="detail">{{$unit->price }}$</div>
                                </br>
                                <div style="font-size:18px; position: absolute;  color: #fff;
                                top:60; left:17px; text-align:center; cursor:pointer; background-color:rgba(0,0,255,0.3); padding:5px;" class="detail">{{$unit->size }}M</div>

	                             <a style="position: relative;top: -17px;left: 100px;" href="{{ route('showunits',array('compound_name'=>$unit->com_name,'building_number'=> $unit->bu_num,'unit_number'=>$unit->un_num)) }}" class="btn btn-success">View Details</a>
                                </div> 
                                @endforeach  
                       
                        
                          </div>
                            @endforeach
                    </div>
                  
              </div>
      </div>
                            






             







<!-- OUR TEAM -->

@include('layouts.ourteam')

@include('user.contact')





@endsection


  <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/file1.js') }}"></script>

    </body>
</html>

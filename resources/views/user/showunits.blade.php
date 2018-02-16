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
        <div class="row">
              <div class="col-md-6">
                    <div class="word">
                        <h3>Size: </h3>
                        <h3>Price: </h3>
                        <h3>Rooms: </h3>
                        <h3>Floor Number: </h3>
                        <h3>City: </h3>
                        <h3>Building Number: </h3>
                        <h3>Compound Name: </h3>
                        <h3>Project Name: </h3>
                        <h3>Extra: </h3>
                   </div>

               </div>


            <div class="col-md-6">


                <img class ="pro" src="https://media1.popsugar-assets.com/files/thumbor/Uk5FcX4wOwofQyHCYfPI-0S8It0/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2016/04/04/825/n/1922794/e2666e80e43f7421_Britney-Spears-Home-For-Sale-In-Thousand-Oaks-CA-Exterior-2/i/bird-eye-view-compound-reveals-just-how-big.jpg"   > 

            </div>
      </div>
</div>



<div class="container">
          <div class="row">
                      <div class="col-md-2">
                      </div>
                      <div class="col-md-2">
                      </div>

                      <div class="col-md-2">

                      <h1 class="book" >$150.000</h1>
                      </div>
                      <div class="col-md-2">
                            <button class="butt">Book</button>
                      </div>
            </div>


</div>


@endsection

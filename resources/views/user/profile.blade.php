@extends('layouts.app')
@section('title')

My Profile
@endsection




@section('content')
<div class="container">
  @foreach ($user as $key => $user)

  <div style="margin-left:30px">

          <h1>Name  :<span>{{$user->name}}</span></h1> 
          <h1>Email :<span>{{$user->email}}</span></h1>
             


  </div>
    @endforeach

  <br>
  <hr>
<div class="container">

@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Unit Number</th>
        <th>Unit Price</th>
        <th>Unit size</th>
        <th>building Number</th>
        <th>Project Name</th>
        <th>Compound Name</th>
        <th>Compound Location</th>
        <th>book_id</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($book_unit as $key => $book_unit)
      <tr>
        <td style="text-align: center ; cursor:pointer"><a href="{{ route('showunits',array('compound_name'=> $book_unit->compound_name,'building_number'=>$book_unit->building_num ,'unit_number'=> $book_unit->unit_num ))}}">{{ $book_unit->unit_num }}</a></td>
        <td style="text-align: center;">{{ $book_unit->unit_price }}</</td>
        <td style="text-align: center;">{{ $book_unit->unit_size }}</</td>
        <td style="text-align: center;">{{ $book_unit->building_num }}</</td>
        <td style="text-align: center;">{{ $book_unit->project_name }}</</td>
        <td style="text-align: center;">{{ $book_unit->compound_name }}</</td>
        <td style="text-align: center;">{{ $book_unit->compound_location }}</</td>
        <td style="text-align: center;">{{ $book_unit->book_id }}</</td>
        <td>      
          <a class="btn btn-danger" href="{{ route('bookdelete',array('book_id'=>$book_unit->book_id)) }}">Delete</a>   
        </td>
      </tr>
    @endforeach

    </tbody>
  </table> 
  </div>
</div>

</div>
@endsection



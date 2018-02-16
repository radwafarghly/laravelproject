@extends('layouts.app')
@section('title')

My Profile
@endsection
<head>



</head>



@section('content')
<div class="container">
<div style="margin-left:30px">
<h1>Name  :</h1> 
<h1>Email :</h1>
</div>
<br>
<hr>







<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Time</th>
      <th scope="col">Number of Units</th>
      <th scope="col">Other</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</div>
@endsection



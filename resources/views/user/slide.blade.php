
<div style="margin-top: 15px; margin-bottom: 15px; width:800px; left:325px;" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div style="height: 400px; " class="carousel-inner" role="listbox">
  <div class="item active">
    <img style="width: 100%; height: 400px; " src="{{ asset('images/2.jpg')}}" alt="...">
    <div class="carousel-caption">
      ...
    </div>
  </div>
   <div class="item">
    <img style="width: 100%; height: 400px;" src="{{ asset('images/3.jpg')}}" alt="...">
    <div class="carousel-caption">
      ...
    </div>
  </div>
  <div class="item">
    <img style="width: 100%; height: 400px;" src="{{ asset('images/5.jpg')}}" alt="...">
    <div class="carousel-caption">
      ...
    </div>
  </div>
  <div class="item">
    <img style="width: 100%; height: 400px;" src="{{ asset('images/4.jpg')}}" alt="...">
    <div class="carousel-caption">
      ...
    </div>
  </div>
  ...
</div>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<i class="fa fa-caret-circle-right"></i>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<i class="fa fa-caret-circle-left"></i>
  <span class="sr-only">Next</span>
</a>
</div>
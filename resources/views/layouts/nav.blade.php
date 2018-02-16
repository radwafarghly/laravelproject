<li><a href="{{url('home')}}" style="color:#f9f8eb; font-size:15px">Home</a></li>
    <li><a href="#"  style="color:#f9f8eb; font-size:15px" >Buy</a>
    
    </li>
    <li><a href="#"  style="color:#f9f8eb ; font-size:15px">Take A look</a></li>

    <li>
	{{--<li class="dropdown">
	          <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
	          <ul class="dropdown-menu">

	          	<li class="dropdown-submenu">
	                <a tabindex="-1" href="#">Project1</a>
	                <ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="#">Compound 1</a></li>
	                  
	                  <li><a href="#">Compound  2 </a></li>
	                  <li><a href="#">Compound 3 </a></li>
	                </ul>
                  </li>
	          	    <li class="dropdown-submenu">
	                <a tabindex="-1" href="#">Project2</a>
	                <ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="#">Compound 1</a></li>
	                  
	                  <li><a href="#">Compound  2 </a></li>
	                  <li><a href="#">Compound 3 </a></li>
	                </ul>
                  </li>                
	          	<li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Project3</a>
                  <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">Compound 1</a></li>
                    
                    <li><a href="#">Compound  2 </a></li>
                    <li><a href="#">Compound 3 </a></li>
                  </ul>
                </li>
	          </ul>
	        </li>
</li>--}}
<li class="dropdown">
    <a style="color:white" href="#" data-toggle="dropdown" class="dropdown-toggle">Projects <b class="caret"></b></a>
    <ul class="dropdown-menu" id="menu1">
      <li>
        <a href="{{url('/project')}}">Project 1<i class="icon-arrow-right"></i></a>
        <ul class="dropdown-menu sub-menu">
          <li><a href="#">Compound1</a></li>
          <li><a href="#">Compound2</a></li>
          <li><a href="#">Compound3</a></li>
        </ul>
      </li>




      <li>
      <a href="{{url('/project')}}">Project 2<i class="icon-arrow-right"></i></a>
      <ul class="dropdown-menu sub-menu">
        <li><a href="#">Compound4</a></li>
        <li><a href="#">Compound5</a></li>
        <li><a href="#">Compound6</a></li>
      </ul>
    </li>      


    <li>
        <a href="{{url('/project')}}">Project 3<i class="icon-arrow-right"></i></a>
        <ul class="dropdown-menu sub-menu">
          <li><a href="#">Compound7</a></li>
          <li><a href="#">Compound8</a></li>
          <li><a href="#">Compound9</a></li>
        </ul>
      </li>



    </ul>
  </li>
 
  

    <li><a href="{{url('/about')}}"  style="color:#f9f8eb; font-size:15px">About Us</a></li>
    <li><a href="{{url('/contact')}}"  style="color:#f9f8eb; font-size:15px">Contact Us</a></li>


   {{--@auth
    <!--DropDown-->
    <li>
    <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">projects
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    @foreach($projects as $project)
      <li><a href="{{ route('show',$project->name) }}">{{$project->name}}
      
      </a></li>
      <!--array('project_name'=>$project->name)-->
      @endforeach
     

    </ul>
  </div>
    </li>

    @endauth--}} 



  

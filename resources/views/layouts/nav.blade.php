<li><a href="{{url('home')}}" style="color:#f9f8eb; font-size:15px">Home</a></li>
    <li><a href="#"  style="color:#f9f8eb; font-size:15px" >Buy</a>
    
    </li>
    <li><a href="#"  style="color:#f9f8eb ; font-size:15px">Take A look</a></li>

    <li>
	
<li class="dropdown">
    <a style="color:white" href="#" data-toggle="dropdown" class="dropdown-toggle"> Projects <b class="caret"></b></a>
    <ul class="dropdown-menu" id="menu1">
    @foreach($projects as $project)
      <li>
        <a href="{{ route('showproject',$project->name) }}">{{$project->name}}<i class="icon-arrow-right"></i></a>
              <ul class="dropdown-menu sub-menu">
             @foreach($project->compound as $compound)
                <li><a href="{{ route('showcompound',array('compound_name'=> $compound->name)) }}">{{$compound->name}} </a></li>
                @endforeach
              </ul>
      </li>
      @endforeach
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



  

<html >
<body id="body1">
@extends('layouts.app')

@section('content')
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>

<img src="{{ asset('css/images/opra.jpg') }}"    width="40" height="40" style="float: right; text-align: right;"/>
   
    <div class="userPanel">
    
    
    </div>
  </div>

  <div class="main">
    <div class="nav">
      <div class="searchbox">
        <div><i class="fa fa-search"></i>
          <input type="search" placeholder="Search"/>
        </div>
      </div>
      <div class="menu">
        <h4><div class="title">Navigation</div><br />
        <ul>
          <li> <i class="fa fa-home"></i><a href="{{route('home')}}">Mon Espace</a></li><br />
          <li><i class="fa fa-signal"></i><a href="{{route('collaborateur')}}">Collaborateurs</a></li><br />
          <li class="active"> <i class="fa fa-tasks"></i><a href="{{route('suivi')}}">Suivi Coaching</a></li><br />
          <li> <i class="fa fa-envelope"></i><a href="{{route('message')}}">Messages</a></li></h4>
        </ul>
      </div>
    </div>
    <div class="view">
      <div class="viewHeader">
        
      </div>
      <div class="content">
        <div class="list">
          <div class="title"><h3>Validation d'Acquis Profesionnels</h3></div><br />


      
<!-- qualités line 1-->
<div class="row">
  <div class="col-sm-2"> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Coordination&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label></div></div>

  <div class="col-sm-2"> 
  <div class="onoffswitch ">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Organisation&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Stress&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Animation&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Efficacité&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Management&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>
</div><br/> <br/> <br/>

<div class="row">
  <div class="col-sm-2"> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Conflit&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
  </div></div>

  <div class="col-sm-2"> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Bienveillance&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Déléguation&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Synthèse&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Négociation&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Adaptation&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>
</div><br/> <br/> <br/> 



<div class="row">
  <div class="col-sm-2"> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Coordination&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label></div></div>

  <div class="col-sm-2"> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Anticipation&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Innovation&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Coordination&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Comm°&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>


  <div class="col-sm-2 "> 
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>&nbsp;&nbsp;<p>Risque&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <span class="onoffswitch-switch"></span>
    </label>
</div></div>



<div class="list">
    <div class="title"><h3>Suivi Séance Coaching</h3></div><br /> 

 <center><button  type="button" class="btn btn-success"> <a href="{{route('articles.index')}}" style="color:black">Tableau de Suivi</buton></center></a></div>
    </div>   

           



          
        </div>
      </div>
    </div>
  </div>
</div>
  </div>         
        </div>
    </div>
</div>
@endsection
</body>
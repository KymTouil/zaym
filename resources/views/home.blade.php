<html >
  
<body id="body1">
@extends('layouts.app')

@section('content')
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>

<img src="{{ asset('css/images/opra.jpg') }}"    width="40" height="40" style="float: right; text-align: right;"/>
   
    <div class="userPanel">
      <!-- <i class="fa fa-chevron-down"></i> -->
    </div>
  </div>

  <div class="main">
    <div class="nav">
      <div class="searchbox">
        <div><i class="fa fa-search"></i>
          <input type="search" placeholder="LOGO"/>
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

     <div  class="view"> 
      <div class="viewHeader">
        <div id="espace" class="title">Espace Personnel</div>
      </div>
      <div  class="content">
        <div class="list">
          <div  class="title">Informations Pesonnelles</div>

          <div class="container-fluid">
          <ul>
          
          <form class="form-horizontal" method="POST" action="{{ route('modification') }}">
            <div class="row">
                <li class="checked">
                <div class="col-sm-4">Nom :&#160; {{ Auth::user()->name }}</div>
                <div class="col-sm-4">Prénom :&#160; {{ Auth::user()->prenom }}</div>
                
                </li>

                <li class="checked">
                <div class="col-sm-4">Rue :&#160; {{ Auth::user()->numero }}</div>
                <div class="col-sm-4">Ville :&#160; {{ Auth::user()->ville }}</div>
                <div class="col-sm-4">Age :&#160; {{ Auth::user()->age }}</div>
                </li>

                <li class="checked">
                <div class="col-sm-4">Fonction :&#160;{{ Auth::user()->fonction }}</div>
                <div class="col-sm-4">Entité :&#160; {{ Auth::user()->entite }}</div>
                <div class="col-sm-4">Depuis Le :&#160; {{ Auth::user()->depuis }}</div>
                </li>
                <li></li>

                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                  
                  <button id= "button" type="button" class="btn btn-primary"> <a href="{{route('modification')}}" style="color:black">Modifier</button></a></div><br />
            </div>
            </form>

            </ul>
          </div>
      </div>

        <div class="list parcours">
          <div class="title">Parcours</div>
          <ul>
              <li class="checked">
              <div class="col-sm-4">Poste Occupé :&#160;Directrice Départementale</div>
              <div class="col-sm-4">Entité :&#160; Google France</div>
              <div class="col-sm-4">Durant :&#160; 3 Ans</div>
              </li>

              <li class="checked">
              <div class="col-sm-4">Poste Occupé :&#160;Responsable Opéraionnelle</div>
              <div class="col-sm-4">Entité :&#160; Amazon France</div>
              <div class="col-sm-4">Durant :&#160; 2 Ans</div>
              </li>

              <li class="checked">
              <div class="col-sm-4">Poste Occupé :&#160;Consultante MOA</div>
              <div class="col-sm-4">Entité :&#160; Safran </div>
              <div class="col-sm-4">Durant :&#160; 1 An</div><li>
              </li>
              
              
              <div class="col-sm-4"></div>
              <div class="col-sm-4"></div>
              <button id= "button1" type="button" class="btn btn-primary"> <a href="{{route('ajouter')}}" style="color:black">Ajouter</buton></a></div><br />
          </ul>
        </div>
      </div>
    </div>
    
@endsection
</body>
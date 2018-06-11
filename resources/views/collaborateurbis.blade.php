<html >
<body id="body1">
@extends('layouts.app')

@section('content')
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>

<img src="{{ asset('css/images/zak.jpg') }}"    width="40" height="40" style="float: right; text-align: right;"/>
   
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
        <div class="title">COLLABORATEUR</div><br />

			<div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
					<div class="row">
						<div class="col-xs-12 col-sm-3 center">
							<span class="profile-picture">
								<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="{{ asset('css/images/zak.jpg') }}">
							</span>

							<div class="space space-4"></div>

							<a href="{{route('message')}}" class="btn btn-sm btn-block btn-primary">
								<i class="ace-icon fa fa-envelope-o bigger-110"></i>
								<span class="bigger-110">Envoyer un message</span>
							</a>
						</div><!-- /.col -->

						<div class="col-xs-12 col-sm-9">
							<h4 class="blue">
								<span class="middle">Zakaria TOUIL</span>
							</h4>
								<div class="profile-info-row">
									<div class="profile-info-name"> Ville </div>

									<div class="profile-info-value">
										<i class="fa fa-map-marker light-orange bigger-110"></i>
										<span>Nancy</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Age </div>

									<div class="profile-info-value">
										<span>38</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Poste </div>

									<div class="profile-info-value">
										<i class="fa fa-map-marker light-orange bigger-110"></i>
										<span>Responsable Logistique</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> depuis le : </div>

									<div class="profile-info-value">
										<span>20/06/2015</span>
									</div>
								</div>
							</div>
				
				</div>
					<h5><i class="ace-icon fa fa-check-square-o bigger-110"></i>
						A Son Sujet :</h5>			
						<p> Collaborateur investi et organisé qui a su trouvé rapidement ses marques. Il a su s'intégrer à l'équipe rapidement.</p>	
					
					<h5><i class="ace-icon fa fa-check-square-o bigger-110"></i>
						Point d'amélioration : 	</h5>				
						<p>Parfois les horaires ne sont pas respectés. Attention aux retards...</p>
						
		</div>
	</div>			
</div>
@endsection
</body>


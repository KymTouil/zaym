<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="body1">
@extends('layouts.app')

@section('content')
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>
		<img src="{{ asset('css/images/opra.jpg') }}"    width="40" height="40" style="float: right; text-align: right;"/>
			<div class="userPanel"></div>
  	</div>

  <div class="main">
    <div class="nav">
      <div class="searchbox">
        <div><i class="fa fa-search"></i>
          <input type="search" placeholder="Search"/>
        </div>
      </div>
      <div class="menu">
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
        <div class="title">COLLABORATEURS</div><br />


<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="{{route('collaborateurbis')}}"><h3>Zakaria TOUIL</h3></a>
        <img src="{{ asset('css/images/zak.jpg') }}" alt="Zak" style="width:30%;">
      </div>

      <div class="item">
       <a href="{{route('collaborateurc')}}"><h3>Yasmine TOUIL</h3></a>
        <img src="{{ asset('css/images/opra.jpg') }}" alt="Opra" style="width:35%;">
      </div>
    
      <div class="item">
        <a href="{{route('collaborateurd')}}"><h3>Shaynez TOUIL</h3></a> 
        <img src="{{ asset('css/images/opra2.jpg') }}" alt="Opra2" style="width:15%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a> -->
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






 

						

@endsection
</body>


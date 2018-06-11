<head>
    <title>ZAYM</title>
    <link rel="icon" href="{{ asset('css/images/zaym.ico') }}"/>
</head>


<html >
<body id="body1">
@extends('layouts.app')
@section('content')
<div class="page">
  <div class="pageHeader">
    <div class="title">Tableau de Bord</div>
<img src="{{ asset('css/images/zak.jpg') }}"    width="40" height="40" style="float: right; text-align: right;"/>
<div class="userPanel"><i class="fa fa-chevron-down"></i>
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

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
             <h2> Voir La Fiche</h2>
            </div>
            <div class="pull-right">
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Intitulé:</strong>
                {{ $article->title}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $article->body}}
            </div>
             <link href="{{asset('css/print.css')}}" rel="stylesheet">

             <a class="btn btn-success" href="{{ route('articles.index') }}"> Retour</a>

             




        </div>
    </div>
                
@endsection
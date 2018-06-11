<html >
<body id="body1">
@extends('layouts.app')

@section('content')
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>

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
        <div class="title">Navigation</div>
        <ul>
          <li> <i class="fa fa-home"></i><a href="{{route('home')}}">Mon Espace</a></li>
          <li><i class="fa fa-signal"></i><a href="{{route('collaborateur')}}">Collaborateurs</a></li>
          <li class="active"> <i class="fa fa-tasks"></i><a href="{{route('suivi')}}">Suivi Coaching</a></li>
          <li> <i class="fa fa-envelope"></i><a href="{{route('message')}}">Messages</a></li>
        </ul>
      </div>
    </div>
    <div class="view">
      <div class="viewHeader">
        <div class="title">MESSAGES</div>
      </div>
      <div class="content">
        <!-- <div class="list">
          <div class="title">Today</div>
          <ul>
            <li class="checked"><i class="fa fa-check-square-o"></i><span>Update team page</span>
              <div class="info">
                <div class="button green">In progress</div><span>Complete by 25/04/2014</span>
              </div>
            </li>
            <li><i class="fa fa-square-o"></i><span>Design a new logo</span>
              <div class="info">
                <div class="button">Pending</div><span>Complete by 10/04/2014</span>
              </div>
            </li>
            <li><i class="fa fa-square-o"></i><span>Find a front end developer</span>
              <div class="info"></div>
            </li>
          </ul>
        </div>
        <div class="list">
          <div class="title">Tomorrow</div>
          <ul>
            <li><i class="fa fa-square-o"></i><span>Find front end developer</span>
              <div class="info"></div>
            </li>
          </ul>
        </div> -->





        
      </div>
    </div>
  </div>
</div>
            
        </div>
    </div>
</div>
@endsection
</body>
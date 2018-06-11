<body id="body1" >
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="black"  class="col-md-8 col-md-offset-2">
            <div id="blackm" class="panel panel-default">
                <div id="black1" class="panel-heading">Modifier</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input style="color:black"id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Prénom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ Auth::user()->prenom }}" >

                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ Auth::user()->age }}" >

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                         <div class="form-group{{ $errors->has('rue') ? ' has-error' : '' }}">
                            <label for="rue" class="col-md-4 control-label">Rue</label>

                            <div class="col-md-6">
                                <input id="rue" type="text" class="form-control" name="rue" value="{{ Auth::user()->rue }}" >

                                @if ($errors->has('rue'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rue') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('codepostal') ? ' has-error' : '' }}">
                            <label for="codepostal" class="col-md-4 control-label">Code Postal</label>

                            <div class="col-md-6">
                                <input id="codepostal" type="text" class="form-control" name="codepostal" value="{{ Auth::user()->codepostal }}" >

                                @if ($errors->has('codepostal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codepostal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                            <label for="ville" class="col-md-4 control-label">Ville</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control" name="ville" value="{{ Auth::user()->ville }}" >

                                @if ($errors->has('ville'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fonction') ? ' has-error' : '' }}">
                            <label for="fonction" class="col-md-4 control-label">Fonction</label>

                            <div class="col-md-6">
                                <input id="fonction" type="text" class="form-control" name="fonction" value="{{ Auth::user()->fonction }}" >

                                @if ($errors->has('fonction'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fonction') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('entite') ? ' has-error' : '' }}">
                            <label for="entite" class="col-md-4 control-label">Entité</label>

                            <div class="col-md-6">
                                <input id="entite" type="text" class="form-control" name="entite" value="{{ Auth::user()->entite }}" >

                                @if ($errors->has('entite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('entite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('depuis') ? ' has-error' : '' }}">
                            <label for="depuis" class="col-md-4 control-label">Depuis le</label>

                            <div class="col-md-6">
                                <input id="depuis" type="date" class="form-control" name="depuis" value="{{ Auth::user()->depuis }}" >

                                @if ($errors->has('depuis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('depuis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Nouveau Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="{{route('home')}}">Retour</a>
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Modifier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
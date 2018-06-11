

<!DOCTYPE html>
<html lang="fr">
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel "stylesheet" type "text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="css/global.css" type="text/css" rel="stylesheet"></link>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCrhbBxu5M4IC3udeiIf76j9NzkiVPPuuw"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head><body id="bodybis" >

@extends('layouts.app')
@section('content')

<!-- <script type="text/javascript" src="autocomplete.js"></script> -->
<div class="container">
    <div class="row">
        <div id="blackm"  class="col-md-8 col-md-offset-2">
            <div id="black1" class="panel panel-default">
                <div id="black1" class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom *</label>

                            <div class="col-md-6">
                                <input style="color:black"id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Prénom *</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age *</label>

                            <div class="col-md-6">
                                <input id="age" type="number" step="" value="0" min="0" max="199" class="form-control" name="age" value="{{ old('age') }}" required autofocus>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                         <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                            <label for="adresse" class="col-md-4 control-label">Adresse *</label>

                            <div class="col-md-6">
                                <input placeholder="Adresse" id="user_input_autocomplete_address" type="text" class="form-control" name="rue" value="{{ old('adresse') }}" required autofocus>

                                @if ($errors->has('adresse'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                            <label for="numero" class="col-md-4 control-label">Numéro *</label>

                            <div class="col-md-6">
                                <input id="street_number"  type="text" class="form-control" name="numero" value="{{ old('numero') }}" required autofocus>

                                @if ($errors->has('numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('rue') ? ' has-error' : '' }}">
                            <label for="numero" class="col-md-4 control-label">Rue *</label>

                            <div class="col-md-6">
                                <input id="route"  type="text" class="form-control" name="numero" value="{{ old('numero') }}" required autofocus>

                                @if ($errors->has('numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                            <label for="ville" class="col-md-4 control-label">Ville *</label>

                            <div class="col-md-6">
                                <input id="locality" type="text" class="form-control" name="ville" value="{{ old('ville') }}" required autofocus>
                                @if ($errors->has('ville'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fonction') ? ' has-error' : '' }}">
                            <label for="fonction" class="col-md-4 control-label">Fonction *</label>

                            <div class="col-md-6">
                                <input id="fonction" type="text" class="form-control" name="fonction" value="{{ old('fonction') }}" required autofocus>

                                @if ($errors->has('fonction'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fonction') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('entite') ? ' has-error' : '' }}">
                            <label for="entite" class="col-md-4 control-label">Entité *</label>

                            <div class="col-md-6">
                                <input id="entite" type="text" class="form-control" name="entite" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('entite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('entite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('depuis') ? ' has-error' : '' }}">
                            <label for="depuis" class="col-md-4 control-label">Depuis le * <h5>(format jjmmaaaa)</h5></label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="depuis"value="2017-06-01" required autofocus>

                                @if ($errors->has('depuis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('depuis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail *</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot De Passe *</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmez Mot De Passe *</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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




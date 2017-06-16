@extends('layouts.admin')

@section('administration')

<h3>Gestion de compte</h3>
<div class="row">
    <div class="administration" id="creerEdition">
        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-compte">Créer un compte</button>
        <form class="form-add-compte" method="POST" action="{{ url('presse') }}">
            {{csrf_field()}}
            <div class="form-group">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" for="annee" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Année
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  
                    <li><a href="#">2017</a></li>
                    <li><a href="#">2018</a></li>
                  </ul>
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}"/>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" value="{{ old('password')}}" />
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmer mot de passe</label>
                <input type="password" name="confirmPassword" class="form-control" value="{{ old('password')}}"/>
            </div>

            <div class="form-group">
                <button class="btn btn-default btnCreateCompte">Créer</button>
            </div>
        </form>
    </div>

    <div id="modCompte">
        
    </div>
</div>
    
@endsection
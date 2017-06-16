@extends('layouts.admin')

@section('administration')

    <h3>L'équipe</h3>
<div class="row">
    <div class="administration" id="creerEquipe">
        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-equipe">Créer une équipe</button>
        <form method="POST" action="{{ url('equipe')}}" class="form-add-equipe">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nom de l'équipe</label>
                <input type="text" class="form-control" placeholder="Nom" name="nom">
            </div>
            <div class="form-group">
                <label>Type d'équipe</label>
            </div>
            <div class="checkbox">
                <label class="checkbox-inline"><input type="checkbox" name="principale" value="">Principale</label>
                <label class="checkbox-inline"><input type="checkbox" name="secondaire" value="">Secondaire</label>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Ecrire ici..." value="{{ old('description') }}"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-default btnAddEquipe">Ajouter</button>
            </div>
        </form>
    </div>
    <div id="modEquipe">
        @include('pages.concours.edit')
    </div>
</div>

@endsection
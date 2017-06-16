<h4>Modifier une equipe</h4>
<div class="row">
    <ul class="liste" id="liste-equipe">
        <!-- début boucle pour membre-->
        <li><button type="button" id="year" class="btn btn-default equipe">Equipe principale</button></li>
        <li><button type="button" id="year" class="btn btn-default equipe">Equipe secondaire</button></li>
        <!-- fin boucle-->
    </ul>
</div>
<form method="POST" action="{{ url('equipe')}}" class="form-mod-equipe">
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
        <button class="btn btn-default btnModEquipe">Modifier équipe</button>
    </div>
</form>
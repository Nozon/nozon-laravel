<h4><button type="button" id="year" class="btn btn-default year-edition">Modifier l'édition</button></h4>
<form class="form-mod" method="POST" action="{{ url('edition') }}">
    <div class="form-group">
        <input type="hidden" name="_method" value="PUT">
        <label for="annee">Année</label>
        <input type="number" name="annee" class="form-control" placeholder="Année" value="{{url('annee')}}">
    </div>
    <div class="form-group">
        <label for="imgConcours">Insérer une image du concours</label>
        <input type="file" name="imgConcours" value="{{url('imgConcours')}}" />
    </div>
    <div class="form-group">
        <label for="dateConcours">Date du concours</label>
        <input type="date" name="dateConcours" class="form-control" value="{{url('dateConcours')}}" />
    </div>
    <div class="form-group">
        <label for="description">Decription</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Ecrire ici..." value="{{url('description')}}"></textarea>
    </div>
    <button class="btn btn-nozon" id="btnModifier">Modifier l'édition</button>
</form>
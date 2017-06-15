<h4><button type="button" id="year" class="btn btn-default devSponsor">Modifier une catégorie</button></h4>
<div id="listeDevenirSponsor">
    <div class="row">
        <div class="grid sponsor-description">
            <div class="row">
                
            </div>
        </div>
    </div>
</div>
<form method="POST" action="{{ url('prix')}}" class="form-mod-devenirSponsor" id="modifierLeDevenirSponsor">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" class="form-control" value=""/>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Ecrire ici..." value=""></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-default btnAddPrix">Modifier</button>
    </div>
</form>
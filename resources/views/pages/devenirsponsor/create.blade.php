<h3>Devenir sponsors</h3>
<div class="row">
    <div class="administration" id="creerPrix">
        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-devenirSponsor">Ajouter une catégorie de sponsoring</button>
        <form method="POST" action="{{ url('sponsor')}}" class="form-add-devenirSponsor">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="niveau">Catégorie</label>
                <input type="text" name="niveau" class="form-control" value="{{ old('niveau') }}"/>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="nom" rows="3" placeholder="Ecrire ici..." value="{{ old('description') }}"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-default btnAddSponsors">Ajouter</button>
            </div>
        </form>
    </div>
    <div id="modDevenirSponsor">
        @include('pages.devenirsponsor.edit')
    </div>
</div>


<form class="form-mod-press" id="modifierLaPress" method="POST" action="{{ url('presse/1') }}">

    <input type="hidden" name="_method" value="PUT" />

        <div class="form-group">
            <label>Nom du journal</label>
            <input type="text" name="titre" class="form-control"/>
        </div>

        <div class="form-group">
            <label>Date de l'article</label>
            <input type="date" name="date" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Lien de l'article</label>
            <input type="url" name="url" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Texte</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Ecrire ici..."></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-default btnModPress">Modifier</button>
        </div>
    </form>
<h3>Les news</h3>
<div class="row">
    <div class="administration" id="creerNews">
        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-news">Ajouter une news</button>
        <form class="form-add-news">
            <div class="form-group">
                <label for="titre">Titre de la news</label>
                <input type="text" name="titre" class="form-control" placeholder="Une année incroyable"/>
            </div>
            <div class="form-group">
                <label>Date de la news</label>
                <input type="date" class="form-control" name="dateNews"/>
            </div>
            <div class="form-group">
                <label>Decription</label>
                <textarea class="form-control" rows="3" placeholder="Ecrire ici..."></textarea>
            </div>
            <div class="form-group">
                <label>Insérer une image</label>
                <input type="file" name="imgNews"/>
            </div>
            <div class="form-group">
                <button class="btn btn-default btnAddNews">Ajouter</button>
            </div>
        </form>
    </div>

    <div id="modNews">
        @include('pages.news.edit')
    </div>
</div>
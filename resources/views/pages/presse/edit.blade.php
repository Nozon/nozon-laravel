/* Formulaire "express" pour tester l'édition d'un presse (faire un UPDATE)
  On la garde ici en commentaire pour un éventuel usage futur. */
  
/*
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
*/

<h4><button type="button" id="year" class="btn btn-default press">Modifier un article de presse</button></h4>
<div id="listePress">
    <div class="row">
        <div class="grid sponsor-description">
            <div class="row">
                @foreach($presses as $presse)
                    <div class="col-md-4">
                        <div class="delMod">
                            <div class="icone-modif-sponsor">
                                <a class="modif-press" href="{{ url('presse/'.$presse->id}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                </div>
                            <div class="icone-sup-sponsor">
                                <a class="sup-press" href="{{$presse->id}}"><span class="glyphicon glyphicon-remove-sign"></span></a>
                            </div>
                        </div>
                        <div class="news-description">
                            <h5 id="title-press">{{$presse->titre}}</h5>
                        </div>
                        <div class="img-news">
                            <img class="img-liste-sponsor" src="{{$presse->URL}}"/>
                        </div>
                        <div class="nes-description">
                            <p id="date-press" type="date">{{$presse->created_at->format('d/m/Y')}}</p>
                        </div>
                        <input type="hidden" name="description" value="{{$presse->description}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<form class="form-mod-press" id="modifierLaPress" method="POST" action="">
    <form class="form-mod-press">
    <div class="form-group">
        <label>Nom du journal</label>
        <input type="text" class="form-control" id="pressName"/>
    </div>
    
    <div class="form-group">
        <label>Date de l'article</label>
        <input type="date" class="form-control"  id="pressDate"/>
    </div>
    <div class="form-group">
        <label>Lien de l'article</label>
        <input type="url" class="form-control"  id="pressArticleLink"/>
    </div>
    <div class="form-group">
        <label>Texte</label>
        <textarea class="form-control" rows="3" placeholder="Ecrire ici..." id="pressText"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-default btnModPress">Modifier</button>
    </div>
</form>

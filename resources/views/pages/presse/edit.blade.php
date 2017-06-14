<h4><button type="button" id="year" class="btn btn-default press">Modifier un article de presse</button></h4>
<div id="listePress">
    <div class="row">
        <div class="grid sponsor-description">
            <div class="row">
                <!-- début boucle afficher article presse -->
                <div class="col-md-4">
                    <div class="delMod">
                        <div class="icone-modif-sponsor">
                            <a class="modif-press" href=""><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            </div>
                        <div class="icone-sup-sponsor">
                            <a class="sup-press" href="#supprimerLePress"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        </div>
                    </div>
                    <div class="news-description">
                        <h5 id="title-press">Titre</h5>
                    </div>
                    <div class="img-news">
                        <img class="img-liste-sponsor" src="../img/facebooklogo.png"/>
                    </div>
                    <div class="nes-description">
                        <p id="date-press" type="date">12.03.2016</p>
                    </div>
                </div>
                <!-- fin boucle --> 
            </div>
        </div>
    </div>
</div>
<form class="form-mod-press" id="modifierLaPress">
    <form class="form-mod-press">
    <div class="form-group">
        <label>Nom du journal</label>
        <input type="text" class="form-control"/>
    </div>
    
    <div class="form-group">
        <label>Date de l'article</label>
        <input type="date" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Lien de l'article</label>
        <input type="url" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Texte</label>
        <textarea class="form-control" rows="3" placeholder="Ecrire ici..."></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-default btnModPress">Modifier</button>
    </div>
</form>
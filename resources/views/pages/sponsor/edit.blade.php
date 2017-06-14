<h4><button type="button" id="year" class="btn btn-default sponsor">Modifier un sponsor</button></h4>
<div id="listeSponsor">
    <div class="row">
        <div class="grid sponsor-description">
            <h2>Principal</h2>

            <div class="col-md-12">
                <div class="delMod">
                    <div class="icone-modif-sponsor">
                        <a class="modif-sponsor" href="#modifierLeSponsor"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        </div>
                    <div class="icone-sup-sponsor">
                        <a class="sup-sponsors" href="#supprimerLeSponsor"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                </div>
                <img class="img-liste-sponsor" src="../img/facebooklogo.png"/>
            </div>

            <h2>Or</h2>

            <div class="row">

                <div class="col-md-4">
                    <div class="delMod">
                        <div class="icone-modif-sponsor">
                            <a class="modif-sponsor" href="#modifierLeSponsor"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            </div>
                        <div class="icone-sup-sponsor">
                            <a class="sup-sponsor" href="#supprimerLeSponsor"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        </div>
                    </div>
                    <img class="img-liste-sponsor" src="../img/facebooklogo.png"/>
                </div>
                
            </div>

            <h2>Argent</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="delMod">
                        <div class="icone-modif-sponsor">
                            <a class="modif-sponsor" href="#modifierLeSponsor"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            </div>
                        <div class="icone-sup-sponsor">
                            <a class="sup-sponsor" href="#supprimerLeSponsor"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        </div>
                    </div>
                    <img class="img-liste-sponsor" src="../img/facebooklogo.png"/>
                </div>
                
            </div>

            <h2>Bronze</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="delMod">
                        <div class="icone-modif-sponsor">
                            <a class="modif-news" href="#modifierLaNews"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            </div>
                        <div class="icone-sup-sponsor">
                            <a class="sup-news" href="#supprimerLaNews"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        </div>
                    </div>
                    <img class="img-liste-sponsor" src="../img/facebooklogo.png"/>
                </div>
                
            </div>
        </div>
    </div>
</div>
<form class="form-mod-sponsor" id="modifierLeSponsor">
    <div class="form-group">
        <label>Insérer une image</label>
        <input type="file" name="imgSponsors"/>
    </div>
    <div class="form-group">
        <label>Categorie</label>
        <select class="form-control">
            <option>Principal</option>
            <option>Or</option>
            <option>Argent</option>
            <option>Bronze</option>
        </select>
    </div>
    <div class="form-group">
        <button class="btn btnd-nozon btnAddSponsors">Ajouter</button>
    </div>
</form>
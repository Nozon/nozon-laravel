                <h3>Les médias</h3>
                <div class="row">
                    <div class="administration" id="creerEdition">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-media">Ajouter un médias</button>
                        <form class="form-add-media">
                            <div class="form-group" id="media">
                                <label>Insérer une image</label>
                                <input type="file" name="imgMedias"/>
                                <button class="btn btn-default btnAddMediaImg">Ajouter photo</button>
                            </div>
                            
                            <div class="form-group" id="media">
                                <label>Insérer une vidéo</label>
                                <input type="file" name="vidMedias"/>
                                <button class="btn btn-default btnAddMediaVideo">Ajouter vidéo</button>
                            </div>
                        </form>
                    </div>

                    <div id="modMedia">
                        <h4><button type="button" id="year" class="btn btn-default media">Modifier un média</button></h4>
                        <div id="listeMedia">
                            <div class="row">
                                <div class="grid sponsor-description">
                                    <h2>Vidéos</h2>
                                    <div class="row">
                                        <!-- début boucle ici -->
                                        <div class="col-md-4">
                                            <div class="delMod">
                                                <div class="icone-modif-sponsor">
                                                    <a class="modif-media" href="#modifierLeMedia"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                                    </div>
                                                <div class="icone-sup-sponsor">
                                                    <a class="sup-media" href="#supprimerLeMedia"><span class="glyphicon glyphicon-remove-sign"></span></a>
                                                </div>
                                            </div>
                                            <img class="img-liste-sponsor" src="../img/facebooklogo.png"/>
                                        </div>
                                        <!-- fin boucle-->
                                    </div>
                                    <h2>Photos</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="delMod">
                                                <div class="icone-modif-sponsor">
                                                    <a class="modif-media" href="#modifierLeMedia"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                                    </div>
                                                <div class="icone-sup-sponsor">
                                                    <a class="sup-media" href="#supprimerLeMedia"><span class="glyphicon glyphicon-remove-sign"></span></a>
                                                </div>
                                            </div>
                                            <img class="img-liste-sponsor" src="../img/facebooklogo.png"/>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <form class="form-mod-media" id="modifierLeMedia">
                            <div class="form-group" id="media">
                                <label>Insérer un fichier</label>
                                <input type="file" name="imgMedias"/>
                                <button class="btn btn-default btnAddMediaImg">Modifier le média</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
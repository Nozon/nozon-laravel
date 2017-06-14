                <h3>Les news</h3>
                <div class="row">
                    <div class="administration" id="creerEdition">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-news">Ajouter une news</button>
                        <form class="form-add-news">
                            <div class="form-group">
                                <label>Insérer une image</label>
                                <input type="file" name="imgNews"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Date de la news</label>
                                <input type="date" class="form-control" name="dateNews"/>
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
                                <button class="btn btn-default btnAddNews">Ajouter</button>
                            </div>
                        </form>
                    </div>

                    <div id="modNews">
                        <h4><button type="button" id="year" class="btn btn-default news">Modifier une news</button></h4>
                        <div id="listeNews">
                            <div class="row">
                                <div class="grid sponsor-description">
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
                                            <div class="news-description">
                                                <h5 id="title-news">Titre</h5>
                                            </div>
                                            <div class="img-news">
                                                <img class="img-liste-sponsor" src="../img/facebooklogo.png"/>
                                            </div>
                                            <div class="nes-description">
                                                <p id="date-news" type="date">12.03.2016</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="form-mod-news" id="modifierLaNews">
                            <form class="form-add-news">
                            <div class="form-group">
                                <label>Insérer une image</label>
                                <input type="file" name="imgNews"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Date de la news</label>
                                <input type="date" class="form-control" name="dateNews"/>
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
                                <button class="btn btn-default btnAddNews">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>